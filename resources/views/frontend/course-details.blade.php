@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title', 'Success Mind Institute')

{{-- Meta Description --}}
@section('meta_description', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Keywords  --}}
@section('meta_keywords', 'Success-Mind-Institute')

{{-- Meta facebook url  --}}
@section('fb_url', 'https://www.successmindinstitute.com/')

{{-- Meta facebook title --}}
@section('fb_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta facebook Description --}}
@section('fb_description', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Twitter url  --}}
@section('twitter_url', 'https://www.successmindinstitute.com/')

{{-- Meta Twitter title  --}}
@section('twitter_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta Twitter description  --}}
@section('twitter_desciption', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Footer border --}}
{{-- @section('footer_border', ' border-top-0') --}}

{{-- Menu Active --}}
@section($course->slug, 'active')

{{-- Stye  --}}
@push('css')
<style>

</style>
@endpush

{{-- Main Content --}}
@section('content')
	<!-- Services Section -->
	<section class="services-details">
		<div class="services-details__header">
			<div class="container">
				<div class="row flex-xl-row-reverse">
					<div class="col-xl-7 mb-5 mb-xl-0">
						<a data-fancybox href="https://www.youtube.com/@successmindinstitute" target="_blank" class="services-details__video">
							<img src="{{ asset('uploads/courses') }}/{{ $course->feature_video_thumbnail }}" alt="course details image" class="services-details__video__poster">
							<div class="services-details__video__btn">
								<i class="bi bi-play-fill"></i>
							</div>
						</a>
					</div>
					<div class="col-xl-5 text-center text-lg-left">
						<h3 class="services-details__sub-title d-inline-block">{{ $course->subtitle }}</h3>
						<h1 class="services-details__title">{{ $course->title }}</h1>
						<div class="row match-height justify-content-center justify-content-lg-start">
							<div class="col-md-4 col-sm-6">
								<div class="services-details__item">
									<p class="services-details__item__text">কোর্সের মেয়াদ</p>
									<h4 class="services-details__item__title">{{ $course->course_duration_offline }}</h4>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="services-details__item">
									<p class="services-details__item__text">লেকচার</p>
									<h4 class="services-details__item__title">{{ $course->lecture_amount }} টি</h4>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="services-details__item">
									<p class="services-details__item__text">প্রজেক্ট</p>
									<h4 class="services-details__item__title">{{ $course->project_amount ?? 10 }}+</h4>
								</div>
							</div>
						</div>
						<p class="services-details__text">{!! $course->description !!}</p>
						<a class="btn btn--primary bubbles-animation bubbles-animation--primary" href="{{ route('home.admission') }}">
							কোর্সটি কিনুন
							<i class="bi bi-arrow-up-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="services-details__body section-gap">
			<div class="container">
				<div class="row flex-lg-row-reverse">
					<div class="col-lg-5 mb-5 mb-lg-0">
						<aside class="services-details__aside">
							<div class="services-details__card">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<strong class="rating-list__item__text">(৫ রিভিউ)</strong>
									</li>
								</ul>
								<ul class="styled-list my-4">
									<li class="styled-list__item">প্রতিটি ক্লাসের ভিডিও</li>
									<li class="styled-list__item">প্রোজেক্ট বেসড টিউটোরিয়াল</li>
									<li class="styled-list__item">ফ্রিল্যান্সিং গাইডলাইন</li>
									<li class="styled-list__item">মার্কেটপ্লেস সম্পর্কে পর্যাপ্ত ধারনা</li>
									<li class="styled-list__item">কোর্স শেষে সার্টিফিকেট</li>
								</ul>
								<div class="services-details__card__block">
									<h4 class="services-details__card__block__title">কোর্স ফী (অফলাইন)</h4>
									<h3 class="mb-3"><span class="background-stripe background-stripe--left background-stripe--secondary number">৳ {{ $course->course_discount_offline }}টাকা</span><small class="number strike ml-2" title="আসল মূল্য">({{ $course->course_fee_offline }}৳)</small></h3>
									<a class="btn btn--primary bubbles-animation bubbles-animation--primary" href="{{ route('home.admission') }}">
										কোর্সটি কিনুন
										<i class="bi bi-arrow-up-right"></i>
									</a>
								</div>
								<div class="services-details__card__block mb-0">
									<h4 class="services-details__card__block__title">কোর্স ফী (অনলাইন)</h4>
									<h3 class="mb-3"><span class="background-stripe background-stripe--right background-stripe--primary">৳ {{ $course->course_discount_online }} টাকা</span><small class="number strike ml-2" title="আসল মূল্য">({{ $course->course_fee_online }}৳)</small></h3>
									<a class="btn btn--secondary bubbles-animation bubbles-animation--primary" href="{{ route('home.admission') }}">
										কোর্সটি কিনুন
										<i class="bi bi-arrow-up-right"></i>
									</a>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-7">
						<div class="mb-5 pb-3">
							<h3 class="services-details__body__title mb-4"><span class="background-stripe background-stripe--left background-stripe--danger px-1 ml-0">#</span> এই কোর্স থেকে কী কী শিখবেন?</h3>
							<ul class="styled-list pl-1">
								@foreach (explode('--', $course->feature) as $feature)
									<li class="styled-list__item">{{ $feature }}</li>
								@endforeach
								{{-- <li class="styled-list__item">HTML5 সম্পর্কে Details Idea, HTML5 ব্যবহার করে Basic Web Page তৈরি</li>
								<li class="styled-list__item">ওয়েব পেজের LayOut ডিজাইন এবং Slider তৈরি </li>
								<li class="styled-list__item">ওয়েব সাইটের Image Insert পদ্ধতি </li>
								<li class="styled-list__item">CSS3 ব্যবহার করে Styling Web Page তৈরি</li>
								<li class="styled-list__item">UI /UX কে HTML এ কনভার্ট করার পদ্ধতি </li>
								<li class="styled-list__item">কাঠামোগত Project তৈরি সম্পর্কে বিস্তারিত আইডিয়া </li>
								<li class="styled-list__item">ওয়েব ডিজাইন শিখে Freelancing শুরু করার ধাপসমূহ </li> --}}
							</ul>
						</div>
						{{-- <div class="mb-5 pb-3">
							<a href="#!" target="_blank" class="services-details__body__card custom-cursor">
								<img src="{{ asset('assets/frontend/assets/images/icons/files.png') }}" alt="card image" class="services-details__body__card__image">
								<h3 class="services-details__body__card__title">কোর্স <span class="background-stripe background-stripe--left background-stripe--secondary">কারিকুলাম</span></h3>
								<p class="services-details__body__card__text">ডাউনলোড করতে ক্লিক করুন</p>
							</a>
						</div> --}}
						<div class="mb-5 pb-3">
							<h3 class="services-details__body__title mb-4"><span class="background-stripe background-stripe--left background-stripe--danger px-1 ml-0">#</span> এই কোর্স শেষে যেসব মার্কেটপ্লেসে কাজ করতে পারবেন</h3>
							<p>স্কিল অর্জন করে লোকাল মার্কেটে কাজের সুযোগ আছে। অনলাইনে গ্লোবাল মার্কেটেও কাজ করতে পারবেন। Fiverr, Upwork, Freelancer, Peopleperhour এর মতো গ্লোবাল মার্কেটপ্লেসে Freelancing করতে পারবেন। </p>
							<div class="row match-height justify-content-center justify-content-lg-start">
								<div class="col-md-4 col-6">
									<a href="https://www.fiverr.com/" target="_blank" class="services-details__item">
										<img src="{{ asset('assets/frontend/assets/images/marketplace/fiverr.png') }}" alt="marketplace image" class="services-details__item__image img-fluid">
									</a>
								</div>
								<div class="col-md-4 col-6">
									<a href="https://www.upwork.com/" target="_blank" class="services-details__item">
										<img src="{{ asset('assets/frontend/assets/images/marketplace/upworks.png') }}" alt="marketplace image" class="services-details__item__image img-fluid">
									</a>
								</div>
								<div class="col-md-4 col-6">
									<a href="https://www.freelancer.com/" target="_blank" class="services-details__item">
										<img src="{{ asset('assets/frontend/assets/images/marketplace/freelancer.png') }}" alt="marketplace image" class="services-details__item__image img-fluid">
									</a>
								</div>
							</div>
						</div>
						<div class="mb-5 pb-3">
							<h3 class="services-details__body__title mb-2"><span class="background-stripe background-stripe--left background-stripe--danger px-1 ml-0">#</span> এই কোর্স যাদের জন্য</h3>
							<div class="row match-height justify-content-center justify-content-lg-start">
								<div class="col-sm-6">
									<div class="services-details__body__card">
										<img src="{{ asset('assets/frontend/assets/images/icons/freelancer.png') }}" alt="card image" class="services-details__body__card__image">
										<h3 class="services-details__body__card__title"><span class="background-stripe background-stripe--left background-stripe--secondary">ফ্রিল্যান্সিং</span> এ আগ্রহী</h3>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-details__body__card">
										<img src="{{ asset('assets/frontend/assets/images/icons/job-search.png') }}" alt="card image" class="services-details__body__card__image">
										<h3 class="services-details__body__card__title"><span class="background-stripe background-stripe--right background-stripe--danger">চাকুরী</span> প্রত্যাশী</h3>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-details__body__card">
										<img src="{{ asset('assets/frontend/assets/images/icons/students.png') }}" alt="card image" class="services-details__body__card__image">
										<h3 class="services-details__body__card__title"><span class="background-stripe background-stripe--right background-stripe--primary">ছাত্র</span>-<span class="background-stripe background-stripe--left background-stripe--secondary">ছাত্রী</span></h3>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-details__body__card">
										<img src="{{ asset('assets/frontend/assets/images/icons/housewife.png') }}" alt="card image" class="services-details__body__card__image">
										<h3 class="services-details__body__card__title"><span class="background-stripe background-stripe--left background-stripe--primary">গৃহিণী</span></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-5 pb-3">
							<h3 class="services-details__body__title mb-4"><span class="background-stripe background-stripe--left background-stripe--danger px-1 ml-0">#</span> কোর্স রিকুয়ারমেন্ট</h3>
							<ul class="styled-list pl-1">
								<li class="styled-list__item">ওয়েব ইন্ডাস্ট্রিতে ক্যারিয়ার গড়তে আগ্রহী, টেকনিক্যাল বা নন টেকনিক্যাল ব্যাকগ্রাউন্ডের যে কেউ কোর্সটি করতে পারবেন।</li>
								<li class="styled-list__item">অবশ্যই কম্পিউটার সম্পর্কে সাধারণ জ্ঞান থাকতে হবে</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Testimonial Section -->
	{{-- <section class="testimonial section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center">
					<h1 class="section-header__title">এই কোর্স সম্পর্কে <span class="background-stripe background-stripe--left background-stripe--primary">শিক্ষার্থীদের</span> কিছু <span class="background-stripe background-stripe--right background-stripe--secondary">মতামত</span></h1>
				</div>
				<div class="col-12">
					<div class="testimonial-wrapper">
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/200" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--youtube">commented on Youtube <span class="testimonial__block__header__meta__icon"><i class="bi bi-youtube"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু সাকসেস মাইন্ড ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
							</div>
						</div>
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/250" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--facebook">commented on facebook <span class="testimonial__block__header__meta__icon"><i class="bi bi-facebook"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								ফ্রিল্যান্সিং নিয়ে আমার তেমন জানা ছিলো না। সাকসেস মাইন্ড ইনস্টিটিউট এর Freelancing with Adobe Illustrator কোর্সটি করে ডিজাইন ও প্রজেক্ট সম্পর্কে ধারণা পেয়েছি। কোর্স শেষে অনলাইন মার্কেটপ্লেসে কাজ করার গাইডলাইন পেয়েছি।
								এক কথায় এই প্লে লিস্ট টি ওয়াও, ১ম যে ১৭ মিনিটের ভিডিওটি ছিল ব্যাসিক হলেও ১৭ মিনিটে ১৭ মিনিট ই লাইফে কাজে লাগবে, এবং ভালো কিছু জিনিস শিখতে পেরেছি, আশা করি দিন দিন জটিল সমস্যা সমাধান নিয়ে এগিয়ে আসলে আমরা ও হাল ছাড়ব না কারন এক্সপ্লোর করে ই যাচ্ছি আমরা আর চোখের সামনে সেটাই কেন যেন চলে এসে। সবচেয়ে জোস একটা প্লে লিস্ট বলব আমি এই সিরিজ কে ❤️
							</div>
						</div>
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/250" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--facebook">commented on facebook <span class="testimonial__block__header__meta__icon"><i class="bi bi-facebook"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								ফ্রিল্যান্সিং নিয়ে আমার তেমন জানা ছিলো না। সাকসেস মাইন্ড ইনস্টিটিউট এর Freelancing with Adobe Illustrator কোর্সটি করে ডিজাইন ও প্রজেক্ট সম্পর্কে ধারণা পেয়েছি। কোর্স শেষে অনলাইন মার্কেটপ্লেসে কাজ করার গাইডলাইন পেয়েছি।
								এক কথায় এই প্লে লিস্ট টি ওয়াও, ১ম যে ১৭ মিনিটের ভিডিওটি ছিল ব্যাসিক হলেও ১৭ মিনিটে ১৭ মিনিট ই লাইফে কাজে লাগবে, এবং ভালো কিছু জিনিস শিখতে পেরেছি, আশা করি দিন দিন জটিল সমস্যা সমাধান নিয়ে এগিয়ে আসলে আমরা ও হাল ছাড়ব না কারন এক্সপ্লোর করে ই যাচ্ছি আমরা আর চোখের সামনে সেটাই কেন যেন চলে এসে। সবচেয়ে জোস একটা প্লে লিস্ট বলব আমি এই সিরিজ কে ❤️
							</div>
						</div>
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/200" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--youtube">commented on Youtube <span class="testimonial__block__header__meta__icon"><i class="bi bi-youtube"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু সাকসেস মাইন্ড ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
							</div>
						</div>
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/200" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--youtube">commented on Youtube <span class="testimonial__block__header__meta__icon"><i class="bi bi-youtube"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু সাকসেস মাইন্ড ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
							</div>
						</div>
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/200" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--youtube">commented on Youtube <span class="testimonial__block__header__meta__icon"><i class="bi bi-youtube"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু সাকসেস মাইন্ড ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
							</div>
						</div>
						<div class="testimonial__block">
							<div class="testimonial__block__header">
								<div class="testimonial__block__header__avatar">
									<img src="https://i.pravatar.cc/250" alt="avatar image" class="testimonial__block__header__avatar__image">
								</div>
								<div class="testimonial__block__header__details">
									<h3 class="testimonial__block__header__title">শিক্ষার্থীর নাম</h3>
									<a href="#!" class="testimonial__block__header__meta testimonial__block__header__meta--facebook">commented on facebook <span class="testimonial__block__header__meta__icon"><i class="bi bi-facebook"></i></span></a>
								</div>
							</div>
							<div class="testimonial__block__body">
								<ul class="rating-list">
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
									<li class="rating-list__item">
										<svg class="rating-list__item__icon" width="1em" height="1em" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M24.6574 1.37559L30.5838 11.2067C35.2878 19.0257 43.6869 23.8667 52.8129 24.0407L64.2901 24.2576L54.459 30.184C46.6401 34.888 41.799 43.2871 41.625 52.4131L41.4082 63.8903L35.4817 54.0592C30.7778 46.2402 22.3786 41.3992 13.2526 41.2252L1.77541 41.0083L11.6065 35.0819C19.4255 30.3779 24.2666 21.9788 24.4405 12.8528L24.6574 1.37559Z" fill="currentColor" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
										</svg>
									</li>
								</ul>
								ফ্রিল্যান্সিং নিয়ে আমার তেমন জানা ছিলো না। সাকসেস মাইন্ড ইনস্টিটিউট এর Freelancing with Adobe Illustrator কোর্সটি করে ডিজাইন ও প্রজেক্ট সম্পর্কে ধারণা পেয়েছি। কোর্স শেষে অনলাইন মার্কেটপ্লেসে কাজ করার গাইডলাইন পেয়েছি।
								এক কথায় এই প্লে লিস্ট টি ওয়াও, ১ম যে ১৭ মিনিটের ভিডিওটি ছিল ব্যাসিক হলেও ১৭ মিনিটে ১৭ মিনিট ই লাইফে কাজে লাগবে, এবং ভালো কিছু জিনিস শিখতে পেরেছি, আশা করি দিন দিন জটিল সমস্যা সমাধান নিয়ে এগিয়ে আসলে আমরা ও হাল ছাড়ব না কারন এক্সপ্লোর করে ই যাচ্ছি আমরা আর চোখের সামনে সেটাই কেন যেন চলে এসে। সবচেয়ে জোস একটা প্লে লিস্ট বলব আমি এই সিরিজ কে ❤️
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
@endsection

@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush
