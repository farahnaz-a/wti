@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title', 'Success Mind Institute')

{{-- Meta Description --}}
@section('meta_description', 'Develop your professional skills through Success Mind Institute. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Keywords  --}}
@section('meta_keywords', 'Success-Mind-Institute')

{{-- Meta facebook url  --}}
@section('fb_url', 'https://www.successmindinstitute.com/')

{{-- Meta facebook title --}}
@section('fb_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta facebook Description --}}
@section('fb_description', 'Develop your professional skills through Success Mind Institute. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Twitter url  --}}
@section('twitter_url', 'https://www.successmindinstitute.com/')

{{-- Meta Twitter title  --}}
@section('twitter_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta Twitter description  --}}
@section('twitter_desciption', 'Develop your professional skills through Success Mind Institute. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Footer border --}}
@section('footer_border', 'border-top-0')

{{-- Menu Active --}}
@section('homeActive', 'active')

{{-- Stye  --}}
@push('css')
<style>

</style>
@endpush

@section('content')
	<!-- Banner Section -->
	<section class="banner">
		<div class="container">
			<div class="row align-items-center text-center text-lg-left">
				<div class="col-lg-5">
					<img src="{{ asset('assets/frontend/assets/images/banner/banner.png') }}" alt="banner image" class="banner__image img-fluid" draggable="false">
				</div>
				<div class="col-lg-6 pt-3 pt-lg-0 pl-lg-5">
					<h1 class="banner__title">লক্ষ্য হোক <span class="bubbles-animation bubbles-animation--primary">স্বপ্ন</span> বাস্তবায়ন</h1>
					<p class="banner__text">অভিজ্ঞ মেন্টর আর আপডেটেড কারিকুলাম নিয়ে সাকসেস মাইন্ড ইনস্টিটিউট প্রস্তুত আপনার ক্যারিয়ার গড়ার অগ্রযাত্রায়। আমাদের ট্রেন্ডি কোর্স থেকে আজই বেছে নিন আপনার পছন্দের কোর্স। এবং ঘরে বসেই নিজের স্কিল ডেভেলপ করুন- সেরা এক্সপার্টদের কাছ থেকে!</p>
					<a class="btn btn--primary bubbles-animation bubbles-animation--primary" href="#newsletter-section">
						আমাদের সাথে থাকুন
						<i class="bi bi-arrow-up-right"></i>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Marquee Section -->
	<div class="section-gap pb-0">
		<div class="marquee marquee--primary" role="marquee">
			<div class="marquee__line">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			</div>
			<div class="marquee__line">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
				আমাদের কোর্সসমূহ
				<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			</div>
		</div>
	</div>

	<!-- Services Section -->
	<section class="services section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center">
					<h1 class="section-header__title"><span class="background-stripe background-stripe--right background-stripe--secondary">বেছে নিন</span> আপনার পছন্দের <span class="background-stripe background-stripe--left background-stripe--primary">কোর্সটি</span></h1>
				</div>
			</div>
			<div class="row match-height justify-content-center">
				@foreach ($courses as $course)
					<div class="col-lg-6 col-md-10">
						<div class="card">
							<a class="card__header" href="{{ route('home.course.details', $course->slug) }}">
								<img src="{{ asset('uploads/courses') }}/{{ $course->feature_image }}" alt="card image" loading="lazy" class="card__header__image">
							</a>
							<div class="card__meta">
								<a href="{{ route('home.course.details', $course->slug) }}" class="card__meta__block card__meta__block--category">
									{{ $course->title }}
								</a>
								<div class="card__meta__block">
									কোর্স ফি <span class="number">{{ $course->course_discount_offline }}৳</span> <span class="number strike" title="আসল মূল্য">({{ $course->course_fee_offline }}৳)</span>
								</div>
							</div>
							<div class="card__body">
								<h3 class="card__title">
									<a href="{{ route('home.course.details', $course->slug) }}" class="card__title__link">
										@php
											$array = explode(' ', $course->subtitle);
											$first_word = array_shift($array);
											$rest_subtitle = implode(' ',$array);
										@endphp
										<span class="background-stripe background-stripe--right background-stripe--secondary">{{ $first_word }}</span> {{ $rest_subtitle }}
                                    </a>
								</h3>
                                <div class="d-flex flex-wrap justify-content-between">
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
                                    <a class="btn btn--primary bubbles-animation bubbles-animation--primary align-self-start" href="{{ route('home.admission') }}">
                                        কোর্সটি কিনুন
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>

	{{-- <!-- Marquee Section -->
	<div class="marquee marquee--secondary" role="marquee">
		<div class="marquee__line">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
		</div>
		<div class="marquee__line">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			শিক্ষাথীদের মন্তব্য
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
		</div>
	</div>

	<!-- Testimonial Section -->
	<section class="testimonial section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 section-header text-center">
					<h1 class="section-header__title">দেখে নেয়া <span class="background-stripe background-stripe--left background-stripe--primary">যাক-</span> কি বলছে আমাদের <span class="background-stripe background-stripe--right background-stripe--secondary">শিক্ষার্থীরা?</span></h1>
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


	<!-- Marquee Section -->
	<div class="marquee marquee--primary" role="marquee">
		<div class="marquee__line">
			Success Mind Institute
            <img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			সাকসেস মাইন্ড ইনস্টিটিউট
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			Success Mind Institute
			<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
			সাকসেস মাইন্ড ইনস্টিটিউট
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
		</div>
		<div class="marquee__line" aria-hidden="true">
			Success Mind Institute
            <img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
			সাকসেস মাইন্ড ইনস্টিটিউট
			<img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
			Success Mind Institute
			<img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
			সাকসেস মাইন্ড ইনস্টিটিউট
			<img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
		</div>
	</div>

	<!-- Newsletter Section -->
	@include('frontend.includes.newsletter')
@endsection


@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush

