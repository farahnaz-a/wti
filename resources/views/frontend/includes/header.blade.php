<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Site Meta Data -->
    <meta name="author" content="Success Mind Institute">
    <meta name="title" content="@yield('title') {{ config('app.name') }}">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
	<!-- Primary Meta Tags -->

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website">
	<meta property="og:url" content="@yield('fb_url')">
	<meta property="og:title" content="@yield('fb_title')">
	<meta property="og:description" content="@yield('fb_description')">
	<meta property="og:image" content="{{ asset('assets/frontend/assets/images/meta/og-image.png') }}">

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="@yield('twitter_url')">
	<meta property="twitter:title" content="@yield('twitter_title')">
	<meta property="twitter:description" content="@yield('twitter_desciption')">
	<meta property="twitter:image" content="{{ asset('assets/frontend/assets/images/meta/og-image.png') }}">

	<!-- Favicon Link -->
	<link rel="icon" type="image/png" sizes="512x512" href="{{ asset("assets/frontend/assets/images/favicon/android-chrome-512x512.png") }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset("assets/frontend/assets/images/favicon/android-chrome-192x192.png") }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/frontend/assets/images/favicon/apple-touch-icon.png") }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset("assets/frontend/assets/images/favicon/favicon-32x32.png") }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/frontend/assets/images/favicon/favicon-16x16.png") }}">
	<link rel="icon" type="image/x-icon" href="{{ asset('uploads/settings/favicon') }}/{{ settings()->favicon }}">

	<!-- Site Title -->
	<title>@yield('title') {{ config('app.name') }}</title>

	<!-- All CSS -->
	<link rel="stylesheet" href="{{ asset("assets/frontend/assets/plugins/bootstrap/css/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/frontend/assets/css/style.min.css") }}">

	@stack('css')
</head>
<body>
	<!-- Preloader Section -->
	<div class="preloader">
		<div class="preloader__container">
			<div class="preloader__main">
				<div class="preloader__main__block">
					<div class="preloader__main__block__circle" style="--position: 0"></div>
					<div class="preloader__main__block__circle" style="--position: 1"></div>
					<div class="preloader__main__block__circle" style="--position: 2"></div>
					<div class="preloader__main__block__circle" style="--position: 3"></div>
				</div>
			</div>
		</div>
    </div>

	<!-- Header Section -->
	<header class="header w-100">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand page-logo bubbles-animation bubbles-animation--primary" href="{{ route('home.index') }}">
                    <img src="{{ asset('uploads/settings/logo') }}/{{ settings()->logo }}" alt="successmindinstitute" height="60" class="page-logo__image">
				</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav text-center mx-auto">
						<li class="nav-item">
							<a class="nav-link @yield('homeActive')" href="{{ route('home.index') }}">হোম</a>
						</li>
						<li class="nav-item dropdown">
							<a role="button" class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarCourseDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								কোর্স সমূহ
								<span class="dropdown-toggle__icon">
									<i class="bi bi-chevron-down"></i>
								</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarCourseDropdown">
								@foreach (allCourses() as $all_course)
									<a class="dropdown-item @yield($all_course->slug)" href="{{ route('home.course.details', $all_course->slug) }}">{{ $all_course->title }}</a>
								@endforeach
							</div>
						</li>
						{{-- <li class="nav-item">
							<a class="nav-link @yield('contactActive')" href="{{ route('home.contact') }}">যোগাযোগ</a>
						</li> --}}
					</ul>
					@auth
						<ul class="dashboard-nav nav text-center">
							<li class="nav-item dropdown">
								<a role="button" class="dashboard-nav__link dropdown-toggle" href="javascript:void(0);" id="navbarDashboardDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="dashboard-nav__link__avatar">
										@if (\Auth::user()->image)
											<img src="{{ asset('uploads/profile') }}/{{ \Auth::user()->image }}" alt="user image" class="dashboard-nav__link__avatar__image ProfileImage">
										@endif
										<span class="dashboard-nav__link__avatar__text">{{ substr(trim(\Auth::user()->name), 0, 1) }}</span>
									</div>
									<span class="dropdown-toggle__icon">
										<i class="bi bi-chevron-down"></i>
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDashboardDropdown">
									<a class="dropdown-item @yield('dashboard')" href="{{ route('home.dashboard') }}">আপনার ড্যাশবোর্ড</a>
									<form action="{{ route('logout') }}" method="POST">
										@csrf
										<button type="submit" class="dropdown-item">
											লগআউট
										</button>
									</form>
								</div>
							</li>
						</ul>
					@else
						<ul class="action-nav nav text-center">
							<li class="nav-item">
								<a class="btn btn--secondary bubbles-animation bubbles-animation--secondary @yield('contactActive')" href="{{ route('home.contact') }}">
									যোগাযোগ
								</a>
							</li>
							{{-- <li class="nav-item">
								<a class="btn btn--secondary bubbles-animation bubbles-animation--secondary @yield('login')" href="{{ url('/login') }}">
									লগইন
								</a>
							</li>
							<li class="nav-item">
								<a class="btn btn--primary bubbles-animation bubbles-animation--primary @yield('register')" href="{{ url('/register') }}">
									একাউন্ট তৈরি করুন
								</a>
							</li> --}}
						</ul>
					@endauth
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
			</div>
		</nav>
	</header>
	<!-- Off Canvas Menu Toggler -->
	<div class="offCanvasMenuCloser position-fixed" data-toggle="collapse" data-target="#navbarSupportedContent" role="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></div>
