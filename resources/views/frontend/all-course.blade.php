@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title') @endsection

{{-- Meta Description --}}
@section('meta_description') @endsection

{{-- Meta Keywords  --}}
@section('meta_keywords') @endsection

{{-- Meta facebook type --}}
@section('fb_type') @endsection

{{-- Meta facebook url  --}}
@section('fb_url') @endsection

{{-- Meta facebook title --}}
@section('fb_title') @endsection

{{-- Meta facebook Description --}}
@section('fb_description') @endsection

{{-- Meta Twitter card  --}}
@section('twitter_card') @endsection

{{-- Meta Twitter url  --}}
@section('twitter_url') @endsection

{{-- Meta Twitter title  --}}
@section('twitter_title') @endsection

{{-- Meta Twitter description  --}}
@section('twitter_desciption') @endsection

{{-- Footer border --}}
{{-- @section('footer_border', ' border-top-0') --}}

{{-- Menu Active --}}
@section('YieldName', 'active')

{{-- Stye  --}}
@push('css')
<style>
    
</style>
@endpush

{{-- Main Content --}}
@section('content') 
    <!-- Services Section -->
    <section class="services section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12 section-header text-center">
                    <h1 class="section-header__title"><span class="background-stripe background-stripe--right background-stripe--secondary">বেছে নিন</span> আপনার পছন্দের <span class="background-stripe background-stripe--left background-stripe--primary">কোর্সটি</span></h1>
                    <p class="section-header__text">বর্তমান বিশ্বের ট্রেন্ডি এবং চাহিদাসম্পন্ন সব কোর্স রয়েছে ওয়েব ট্রেনিং ইনস্টিটিউটে। কোর্স করার সময় যে প্রয়োজনীয় কনফিগারেশনের কম্পিউটার দরকার, তার সবই রয়েছে আমাদের ল্যাবে। আপনি চাইলেই ক্লাস শেষে ল্যাবে বসে কোর্স বিষয়ক যেকোনো কিছু প্র্যাকটিস করতে পারেন। প্রতিটি কোর্স এমনভাবে সাজানো হয়েছে, যাতে কোর্স শেষে প্রতিটি টপিকে কাজ করার আত্মবিশ্বাস আপনার থাকে। </p>
                </div>
                <div class="col-12">
                    <h2 class="services__sub-title"><span class="background-stripe background-stripe--right background-stripe--primary">ওয়েব</span> এন্ড <span class="background-stripe background-stripe--right background-stripe--secondary">সফটওয়্যার</span></h2>
                </div>
            </div>
            <div class="row match-height">
                <div class="col-lg-6 col-md-10">
                    <div class="card">
                        <a class="card__header" href="./course-details.html">
                            <img src="{{ asset('assets/frontend/assets/images/course/course-banner.jpg') }}" alt="course image" class="card__header__image">
                        </a>
                        <div class="card__meta">
                            <a href="./course-details.html" class="card__meta__block card__meta__block--category">
                                ওয়েব ডিজাইন
                            </a>
                            <div class="card__meta__block">
                                কোর্স ফি ১২,০০০ ৳
                            </div>
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                <a href="./course-details.html" class="card__title__link">
                                    <span class="background-stripe background-stripe--right background-stripe--primary">HTML & CSS</span> দিয়ে ওয়েব ডিজাইন করুন
                                </a>
                            </h3>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="card">
                        <a class="card__header" href="./course-details.html">
                            <img src="{{ asset('assets/frontend/assets/images/course/course-banner.jpg') }}" alt="course image" class="card__header__image">
                        </a>
                        <div class="card__meta">
                            <a href="./course-details.html" class="card__meta__block card__meta__block--category">
                                ওয়েব ডেভেলপমেন্ট
                            </a>
                            <div class="card__meta__block">
                                কোর্স ফি ১৪,০০০ ৳
                            </div>
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                <a href="./course-details.html" class="card__title__link">
                                    <span class="background-stripe background-stripe--left background-stripe--danger">Laravel</span> দিয়ে ওয়েব ডেভেলপমেন্ট করুন
                                </a>
                            </h3>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="card">
                        <a class="card__header" href="./course-details.html">
                            <img src="{{ asset('assets/frontend/assets/images/course/course-banner.jpg') }}" alt="course image" class="card__header__image">
                        </a>
                        <div class="card__meta">
                            <a href="./course-details.html" class="card__meta__block card__meta__block--category">
                                ডিজাইন ও ডেভেলপমেন্ট
                            </a>
                            <div class="card__meta__block">
                                কোর্স ফি ১৬,০০০ ৳
                            </div>
                        </div>
                        <div class="card__body">
                            <h3 class="card__title">
                                <a href="#!" class="card__title__link">
                                    <span class="background-stripe background-stripe--left background-stripe--secondary">HTML & CSS</span> এবং <span class="background-stripe background-stripe--left background-stripe--danger">Laravel</span> দিয়ে ওয়েব ডিজাইন ও ডেভেলপমেন্ট করুন 
                                </a>
                            </h3>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Section -->
    <div class="marquee marquee--primary" role="marquee">
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
                                আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু ওয়েব ট্রেনিং ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
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
                                ফ্রিল্যান্সিং নিয়ে আমার তেমন জানা ছিলো না। ওয়েব ট্রেনিং ইনস্টিটিউট এর Freelancing with Adobe Illustrator কোর্সটি করে ডিজাইন ও প্রজেক্ট সম্পর্কে ধারণা পেয়েছি। কোর্স শেষে অনলাইন মার্কেটপ্লেসে কাজ করার গাইডলাইন পেয়েছি।
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
                                ফ্রিল্যান্সিং নিয়ে আমার তেমন জানা ছিলো না। ওয়েব ট্রেনিং ইনস্টিটিউট এর Freelancing with Adobe Illustrator কোর্সটি করে ডিজাইন ও প্রজেক্ট সম্পর্কে ধারণা পেয়েছি। কোর্স শেষে অনলাইন মার্কেটপ্লেসে কাজ করার গাইডলাইন পেয়েছি।
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
                                আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু ওয়েব ট্রেনিং ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
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
                                আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু ওয়েব ট্রেনিং ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
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
                                আমি কয়েকটি লার্নিং প্লাটফর্মে ক্লাস করেছি অনেক সময় প্রাসঙ্গিক কথাকে অনেক দীর্ঘ সময় নিয়ে আলোচনা করায় মূল পয়েন্ট থেকে মনযোগ বিচ্যুত হয়েছে কিন্তু ওয়েব ট্রেনিং ইনস্টিটিউট এর কোর্সগুলো একদম মূল বিষয়ের উপর ফোকাস করে তৈরি করা হয়েছে।
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
                                ফ্রিল্যান্সিং নিয়ে আমার তেমন জানা ছিলো না। ওয়েব ট্রেনিং ইনস্টিটিউট এর Freelancing with Adobe Illustrator কোর্সটি করে ডিজাইন ও প্রজেক্ট সম্পর্কে ধারণা পেয়েছি। কোর্স শেষে অনলাইন মার্কেটপ্লেসে কাজ করার গাইডলাইন পেয়েছি।
                                এক কথায় এই প্লে লিস্ট টি ওয়াও, ১ম যে ১৭ মিনিটের ভিডিওটি ছিল ব্যাসিক হলেও ১৭ মিনিটে ১৭ মিনিট ই লাইফে কাজে লাগবে, এবং ভালো কিছু জিনিস শিখতে পেরেছি, আশা করি দিন দিন জটিল সমস্যা সমাধান নিয়ে এগিয়ে আসলে আমরা ও হাল ছাড়ব না কারন এক্সপ্লোর করে ই যাচ্ছি আমরা আর চোখের সামনে সেটাই কেন যেন চলে এসে। সবচেয়ে জোস একটা প্লে লিস্ট বলব আমি এই সিরিজ কে ❤️
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <img src="{{ asset('assets/frontend/assets/images/illustrations/contact_us.png') }}" alt="Sign In" class="img-fluid">
                    <form action="#!" class="form">
                        <div class="section-header">
                            <h1 class="section-header__title">একটি <span class="background-stripe background-stripe--right background-stripe--secondary">নিউজলেটার</span> পান</h1>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="আপনার ইমেইল দিন *" required>
                        </div>
                        <button type="submit" class="btn btn--primary bubbles-animation bubbles-animation--primary">
                            সাবস্ক্রাইব
                            <i class="bi bi-arrow-up-right"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Section -->
    <div class="marquee marquee--secondary" role="marquee">
        <div class="marquee__line">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
        </div>
        <div class="marquee__line">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/star--yellow.svg') }}" alt="shape icon" class="marquee__line__shape">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/heart.svg') }}" alt="shape icon" class="marquee__line__shape">
            সকল কোর্সে ভর্তি চলছে
            <img src="{{ asset('assets/frontend/assets/images/icons/star--white.svg') }}" alt="shape icon" class="marquee__line__shape">
        </div>
    </div>
@endsection

@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush