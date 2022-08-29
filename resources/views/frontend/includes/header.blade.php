<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<!-- Site Meta Data -->
    <meta name="author" content="Web Traning Institute">
    <meta name="title" content="@yield('title') {{ config('app.name') }}">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keywords')">
	<!-- Primary Meta Tags -->   

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="@yield('fb_type')">
	<meta property="og:url" content="@yield('fb_url')">
	<meta property="og:title" content="@yield('fb_title')">
	<meta property="og:description" content="@yield('fb_description')">
	<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

	<!-- Twitter -->
	<meta property="twitter:card" content="@yield('twitter_card')">
	<meta property="twitter:url" content="@yield('twitter_url')">
	<meta property="twitter:title" content="@yield('twitter_title')">
	<meta property="twitter:description" content="@yield('twitter_desciption')">
	<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

	<!-- Favicon Link -->
	<link rel="icon" type="image/png" sizes="512x512" href="{{ asset("assets/frontend/assets/images/favicon/android-chrome-512x512.png") }}">
	<link rel="icon" type="image/png" sizes="192x192" href="{{ asset("assets/frontend/assets/images/favicon/android-chrome-192x192.png") }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/frontend/assets/images/favicon/apple-touch-icon.png") }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset("assets/frontend/assets/images/favicon/favicon-32x32.png") }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/frontend/assets/images/favicon/favicon-16x16.png") }}">
	<link rel="icon" type="image/x-icon" href="{{ asset("assets/frontend/assets/images/favicon/favicon.ico") }}">

	<!-- Site Title -->
	<title>@yield('title') {{ config('app.name') }}</title>

	<!-- All CSS -->
	<link rel="stylesheet" href="{{ asset("assets/frontend/assets/plugins/bootstrap/css/bootstrap.min.css") }}">
	<link rel="stylesheet" href="{{ asset("assets/frontend/assets/css/style.css") }}">

	@stack('css')
</head>
<body>
	<!-- Header Section -->
	<header class="header w-100">
		<nav class="navbar navbar-expand-lg">
			<div class="container">
				<a class="navbar-brand page-logo bubbles-animation bubbles-animation--primary" href="{{ route('home.index') }}">
					<span class="page-logo__text page-logo__text--top d-block"><span class="page-logo__text__icon"><i class="bi bi-code-slash"></i></span>Web Training</span>						
					<span class="page-logo__text page-logo__text--bottom">Institute</span>						
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
								<a class="dropdown-item @yield('courseWebActive')" href="#!">ওয়েব ডিজাইন</a>
								<a class="dropdown-item @yield('courseDevelopmentActive')" href="#!">ওয়েব ডেভেলপমেন্ট</a>
								<a class="dropdown-item @yield('courseDesignAdnDevelopmentActive')" href="#!">ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link @yield('contactActive')" href="{{ route('home.contact') }}">যোগাযোগ</a>
						</li>
					</ul>
					<ul class="action-nav nav text-center">
						@auth 
						<li class="nav-item">
							<form action="{{ route('logout') }}" method="POST">
								@csrf
								<button type="submit" class="btn btn--secondary bubbles-animation bubbles-animation--secondary">
									লগআউট 
								</button>
							</form>
						</li>
						<li class="nav-item">
							<a class="btn btn--primary bubbles-animation bubbles-animation--primary @yield('dashboard')" href="#!">
								ড্যাশবোর্ড
							</a>
						</li> 
						@else
						<li class="nav-item">
							<a class="btn btn--secondary bubbles-animation bubbles-animation--secondary @yield('login')" href="{{ url('/login') }}">
								লগইন
							</a>
						</li>
						<li class="nav-item">
							<a class="btn btn--primary bubbles-animation bubbles-animation--primary @yield('register')" href="{{ url('/register') }}">
								একাউন্ট তৈরি করুন
							</a>
						</li> 
						@endauth
					</ul>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
			</div>
		</nav>
	</header>
	<!-- Off Canvas Menu Toggler -->
	<div class="offCanvasMenuCloser position-fixed" data-toggle="collapse" data-target="#navbarSupportedContent" role="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></div>