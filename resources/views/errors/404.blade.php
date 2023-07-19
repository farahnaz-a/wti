@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title', 'Page Not Found')

{{-- Meta Description --}}
@section('meta_description', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Keywords  --}}
@section('meta_keywords', 'Success-Mind-Institute')

{{-- Meta facebook url  --}}
@section('fb_url', 'https://www.successmindinstitute.com/contact')

{{-- Meta facebook title --}}
@section('fb_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta facebook Description --}}
@section('fb_description', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')

{{-- Meta Twitter url  --}}
@section('twitter_url', 'https://www.successmindinstitute.com/contact')

{{-- Meta Twitter title  --}}
@section('twitter_title', 'Success Mind Institute - Professional IT Training Institute in Bangladesh')

{{-- Meta Twitter description  --}}
@section('twitter_desciption', 'Develop your professional skills through SMI. We provide Graphic Design, Digital Marketing, Web Design & Development, 3d Animation, etc.')


{{-- Main Content --}}
@section('content')
	<!-- Error Section -->
	<section class="error section-gap">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<img src="{{ asset('assets/frontend/assets/images/illustrations/404.svg') }}" alt="error illustration" class="error__image">
					<h1 class="error__title">৪০৪</h1>
					<h2 class="error__sub-title"><span class="background-stripe background-stripe--left background-stripe--secondary">পেজটি</span> খুঁজে পাওয়া <span class="background-stripe background-stripe--right background-stripe--danger">যায়নি!</span></h2>
					<p class="error__text">এখন এই পৃষ্ঠাটি নেই! আমরা আপনাকে হোম পেইজে ফিরে যাওয়ার পরামর্শ দিচ্ছি।</p>
					<a href="{{ route('home.index') }}" class="btn btn--primary bubbles-animation bubbles-animation--primary">হোম পেজে চলুন</a>
				</div>
			</div>
		</div>
	</section>
@endsection
