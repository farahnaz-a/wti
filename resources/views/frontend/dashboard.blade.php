@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title', 'Success Mind Institute')

{{-- Meta Description --}}
@section('meta_description', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Keywords  --}}
@section('meta_keywords', 'Success-Mind-Institute')

{{-- Meta facebook url  --}}
@section('fb_url', 'https://www.successmindinstitute.com/dashboard')

{{-- Meta facebook title --}}
@section('fb_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta facebook Description --}}
@section('fb_description', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Twitter url  --}}
@section('twitter_url', 'https://www.successmindinstitute.com/dashboard')

{{-- Meta Twitter title  --}}
@section('twitter_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta Twitter description  --}}
@section('twitter_desciption', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Footer border --}}
{{-- @section('footer_border', ' border-top-0') --}}

{{-- Menu Active --}}
@section('dashboard', 'active')

{{-- Stye  --}}
@push('css')
<style>
    
</style>
@endpush

{{-- Main Content --}}
@section('content')
	<!-- Sub Banner Section -->
	<section class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="sub-banner__title text-center">
						আপনার <span class="background-stripe background-stripe--right background-stripe--secondary">ড্যাশবোর্ড</span>
					</h1>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="dashboard section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<aside class="dashboard__aside">
						<div class="nav-pills nav flex-column flex-sm-row flex-lg-column justify-content-center" role="tablist">
							<a class="nav-pills__link active" aria-selected="true" data-toggle="pill" href="#v-pills-profile" role="tab">
								<i class="bi bi-person-circle"></i>
								<span class="pl-1">প্রোফাইল</span>
							</a>
							<a class="nav-pills__link" aria-selected="false" data-toggle="pill" href="#v-pills-password" role="tab">
								<i class="bi bi-shield-lock"></i>
								<span class="pl-1">পাসওয়ার্ড পরিবর্তন</span>
							</a>
							{{-- <a class="nav-pills__link" aria-selected="false" data-toggle="pill" href="#v-pills-courses" role="tab">
								<i class="bi bi-bag-check"></i>
								<span class="pl-1">ক্রয়কৃত কোর্স</span>
							</a> --}}
						</div>
					</aside>
				</div>
				<div class="col-lg-9 mt-4 mt-lg-0">
					<div class="tab-content">
						<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel">
							<div class="form">
								<div class="profile-pane">
									<div class="profile-pane__default">
										<h3 class="form-group text-center">আপনার বর্তমান <span class="background-stripe background-stripe--left background-stripe--secondary">তথ্য</span></h3>
										<div class="row">
											<div class="col-12 mb-3">
												<div class="form-group">
													<div class="image-holder__card mx-auto">
														<span class="image-holder__card__text">{{ substr(trim($user->name), 0, 1) }}</span>
														@if ($user->image)
															<img src="{{ asset('uploads/profile') }}/{{ $user->image }}" alt="preview image" class="image-holder__card__preview ProfileImage">
														@endif
													</div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group text-center">
													<h4 class="form-label"><strong>আপনার নাম</strong></h4>
													<p class="form-text mb-0" id="userName">{{ $user->name }}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group text-center">
													<h4 class="form-label"><strong>আপনার ইমেইল</strong></h4>
													<p class="form-text mb-0" id="userEmail">{{ $user->email }}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group text-center">
													<h4 class="form-label"><strong>আপনার ফোন নাম্বার</strong></h4>
													<p class="form-text mb-0" id="userPhone">{{ $user->phone }}</p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group text-center">
													<h4 class="form-label"><strong>ক্রয়কৃত কোর্স সংখ্যা</strong></h4>
													<p class="form-text mb-0">01</p>
												</div>
											</div>
											<div class="col-12 text-center mt-3">
												<button type="submit" class="btn btn--primary bubbles-animation bubbles-animation--primary profile-pane__edit-btn">
													<span class="pr-1">পরিবর্তন করুন</span>
													<i class="bi bi-pencil-fill"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="profile-pane__edit" style="display: none;">
										<div class="text-right">
											<button type="button" class="close-btn profile-pane--close-btn">
												<i class="bi bi-x-lg"></i>
											</button>
										</div>
										<form action="#!" id="infoForm">
											<h3 class="form-group text-center">তথ্য <span class="background-stripe background-stripe--left background-stripe--secondary">হালনাগাদ</span> করুন</h3>
											<div class="row">
												<div class="col-12">
													<div class="form-group text-center">
														<label class="image-uploader">
															<input type="file" name="image" accept="image/*" class="image-uploader__input">
															<div class="image-holder__card">
																<img src="{{ asset('assets/frontend/assets/images/icons/upload.png') }}" alt="preview image" class="image-holder__card__preview image-uploader__card__preview">
															</div>
														</label>
														<div class="error-message error-message__info d-none imageError">
															<i class="bi bi-info-circle"></i> <span id="imageError"></span>
														</div>
													</div>
												</div>
												<div class="col-12">
													<div class="form-group">
														<input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="আপনার নাম *">
														<div class="error-message error-message__info  d-none nameError">
															<i class="bi bi-info-circle"></i> <span id="nameError"></span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="আপনার ইমেইল *">
														<div class="error-message error-message__info  d-none emailError">
															<i class="bi bi-info-circle"></i> <span id="emailError"></span>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<input type="tel" name="phone" value="{{ $user->phone }}" class="form-control" placeholder="আপনার ফোন নাম্বার *">
														<div class="error-message error-message__info  d-none phoneError">
															<i class="bi bi-info-circle"></i> <span id="phoneError"></span>
														</div>
													</div>
												</div>
												<div class="col-12 text-center">
													<button type="button" id="infoUpdateButton" class="btn btn--primary bubbles-animation bubbles-animation--primary profile-pane__save-btn">
														<i class="bi bi-check-square"></i>
														<span class="pl-1">সংরক্ষণ করুন</span>
													</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-password" role="tabpanel">
							<form action="#!" class="form" id="passwordForm">
								<h3 class="form-group text-center">পাসওয়ার্ড <span class="background-stripe background-stripe--left background-stripe--secondary">হালনাগাদ</span> করুন</h3>
								<div class="success-message success-message__password d-none">  

								</div>
								<div class="row mt-4">
									<div class="col-md-6">
										<div class="form-group">
											<div class="input-group password-wrapper">
												<input type="password" name="password" id="password" class="form-control password-input" placeholder="বর্তমান পাসওয়ার্ড *">
												<div class="input-group-append">
													<button type="button" class="input-group-text password-toggler">
														<i class="bi bi-eye-fill"></i>
													</button>
												</div>
											</div>
											<div class="error-message error-message__password d-none passwordError">
												<i class="bi bi-info-circle"></i> <span id="passwordError"></span>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<div class="input-group password-wrapper">
												<input type="password" name="new_password" id="new_password" class="form-control password-input" placeholder="নতুন পাসওয়ার্ড *">
												<div class="input-group-append">
													<button type="button" class="input-group-text password-toggler">
														<i class="bi bi-eye-fill"></i>
													</button>
												</div>
											</div>
											<div class="error-message error-message__password d-none new_passwordError">
												<i class="bi bi-info-circle"></i> <span id="new_passwordError"></span>
											</div>
										</div>
									</div>
									<div class="col-12 text-center">
										<button type="button" id="passwordUpdateButton" class="btn btn--primary bubbles-animation bubbles-animation--primary password-pane__save-btn">
											<i class="bi bi-check-square"></i>
											<span class="pl-1">সংরক্ষণ করুন</span>
										</button>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="v-pills-courses" role="tabpanel">
							<div class="dashboard-course-card">
								<a href="./course-details.html" class="dashboard-course-card__header">
									<img src="{{ asset('assets/frontend/assets/images/course/course-banner.jpg') }}" alt="course image" class="dashboard-course-card__header__image">
								</a>
								<div class="dashboard-course-card__body">
									<div class="mb-2 text-right">
										<div class="status status--success">Success</div>
									</div>
									<h3 class="dashboard-course-card__body__title">
										<a href="./course-details.html" class="dashboard-course-card__body__title__link"><span class="background-stripe background-stripe--right background-stripe--primary">HTML & CSS</span> দিয়ে ওয়েব ডিজাইন করুন </a>
									</h3>
									<h4 class="dashboard-course-card__body__sub-title my-3"><span class="dashboard-course-card__body__icon-btn mr-2"><i class="bi bi-person-fill"></i></span> জাহিদ হাসান মুন্না</h4>
									<div class="d-md-flex justify-content-between">
										<ul class="rating-list">
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
										</ul>
										<h3 class="mb-0 mt-3 mt-lg-0"><span class="background-stripe background-stripe--right background-stripe--secondary">১২,০০০ ৳</span></h3>
									</div>
								</div>
							</div>
							<div class="dashboard-course-card">
								<a href="./course-details.html" class="dashboard-course-card__header">
									<img src="{{ asset('assets/frontend/assets/images/course/course-banner.jpg') }}" alt="course image" class="dashboard-course-card__header__image">
								</a>
								<div class="dashboard-course-card__body">
									<div class="mb-2 text-right">
										<div class="status status--warning">Pending</div>
									</div>
									<h3 class="dashboard-course-card__body__title">
										<a href="./course-details.html" class="dashboard-course-card__body__title__link">
											<span class="background-stripe background-stripe--left background-stripe--danger">Laravel</span> দিয়ে ওয়েব ডেভেলপমেন্ট করুন
										</a>
									</h3>
									<h4 class="dashboard-course-card__body__sub-title my-3"><span class="dashboard-course-card__body__icon-btn mr-2"><i class="bi bi-person-fill"></i></span> মোঃ শিমুল হাসান</h4>
									<div class="d-md-flex justify-content-between">
										<ul class="rating-list">
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
											<li class="rating-list__item">
												<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</li>
										</ul>
										<h3 class="mb-0 mt-3 mt-lg-0"><span class="background-stripe background-stripe--right background-stripe--secondary">১৪,০০০ ৳</span></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Marquee Section -->
	{{-- <div class="marquee marquee--primary" role="marquee">
		<div class="marquee__line">
			আমাদের পার্সোনাল বিকাশ নাম্বার 012 XXXX XXXX
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			আমাদের পার্সোনাল রকেট নাম্বার 012 XXXX XXXX
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			আমাদের পার্সোনাল নগদ নাম্বার 012 XXXX XXXX
			<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
		</div>
		<div class="marquee__line">
			আমাদের পার্সোনাল বিকাশ নাম্বার 012 XXXX XXXX
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			আমাদের পার্সোনাল রকেট নাম্বার 012 XXXX XXXX
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			আমাদের পার্সোনাল নগদ নাম্বার 012 XXXX XXXX
			<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
		</div>
	</div> --}}
@endsection

@push('js')
<script>
	$(document).on("click", ".profile-pane__edit-btn", function(){
		$(this).closest(".profile-pane__default").hide();
		$(".profile-pane__edit").fadeIn();
	});

	// $(document).on("click", ".profile-pane__save-btn", function(){
	// 	$(this).closest(".profile-pane__edit").hide();
	// 	$(".profile-pane__default").fadeIn();
	// });

	$(document).on("click", ".profile-pane--close-btn", function(){
		$(this).closest(".profile-pane__edit").hide();
		$(".profile-pane__default").fadeIn();
	});
	$(document).on('click', '#infoUpdateButton', function(e){ 
		e.preventDefault();
		var form_data = new FormData(document.getElementById("infoForm"));  
		$.ajax({
			type : "post",
			url  : "{{ route('home.info.update') }}",
			data : form_data,
			contentType: false,
			processData: false,
			success : function(response){ 
				$('.ProfileImage').attr('src', "{{ asset('uploads/profile') }}/"+response.image);
				$('#userName').text(response.name);
				$('#userEmail').text(response.email);
				$('#userPhone').text(response.phone);
				$('.error-message__info').addClass('d-none');
				$('.profile-pane__save-btn').closest(".profile-pane__edit").hide();
				$(".profile-pane__default").fadeIn();
			},
			error : function(errors){ 
				$('.success-message__info').addClass('d-none');
				if(errors.responseJSON.errors['image']){ 
					$('.imageError').removeClass('d-none');
					$('#imageError').text(errors.responseJSON.errors['image']);
				}else{
					$('.imageError').addClass('d-none');
				}
				if(errors.responseJSON.errors['name']){ 
					$('.nameError').removeClass('d-none');
					$('#nameError').text(errors.responseJSON.errors['name']);
				}else{
					$('.nameError').addClass('d-none');
				}
				if(errors.responseJSON.errors['email']){
					$('.emailError').removeClass('d-none');
					$('#emailError').text(errors.responseJSON.errors['email']);
				}else{
					$('.emailError').addClass('d-none');
				}
				if(errors.responseJSON.errors['phone']){
					$('.phoneError').removeClass('d-none');
					$('#phoneError').text(errors.responseJSON.errors['phone']);
				}else{
					$('.phoneError').addClass('d-none');
				} 
			}
		});
	});
	$(document).on('click', '#passwordUpdateButton', function(e){ 
		e.preventDefault();
		var form_data = new FormData(document.getElementById("passwordForm"));  
		$.ajax({
			type : "post",
			url  : "{{ route('home.password.update') }}",
			data : form_data,
			contentType: false,
			processData: false,
			success : function(response){ 
				$('#passwordForm').trigger('reset');
				$('.error-message__password').addClass('d-none'); 
				$('.success-message__password').removeClass('d-none');
				$('.success-message__password').html('<i class="bi bi-check-circle"></i>' + ' পাসওয়ার্ড পরিবর্তন সফল হয়েছ।');
			},
			error : function(errors){  
				$('.success-message__password').addClass('d-none');
				if(errors.responseJSON.errors['password']){
					$('.passwordError').removeClass('d-none');
					$('#passwordError').text(errors.responseJSON.errors['password']);
				}else{
					$('.passwordError').addClass('d-none');
				}
				if(errors.responseJSON.errors['new_password']){
					$('.new_passwordError').removeClass('d-none');
					$('#new_passwordError').text(errors.responseJSON.errors['new_password']);
				}else{
					$('.new_passwordError').addClass('d-none');
				}
			}
		});
	});

    $(document).ready(function(){
			
    });
</script>
@endpush
