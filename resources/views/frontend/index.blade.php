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
					<h1 class="banner__title">লক্ষ্য হোক <span class="bubbles-animation bubbles-animation--primary">দক্ষ</span> হওয়া!</h1>
					<p class="banner__text">অভিজ্ঞ মেন্টর আর আপডেটেড কারিকুলাম নিয়ে ওয়েব ট্রেনিং ইনস্টিটিউট প্রস্তুত আপনার ক্যারিয়ার গড়ার অগ্রযাত্রায়। আমাদের ট্রেন্ডি কোর্স থেকে আজই বেছে নিন আপনার পছন্দের কোর্স। এবং ঘরে বসেই নিজের স্কিল ডেভেলপ করুন- সেরা এক্সপার্টদের কাছ থেকে!</p>
					<a class="btn btn--primary bubbles-animation bubbles-animation--primary" href="#!">
						ব্রাউজ কোর্স
						<i class="bi bi-arrow-up-right"></i>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section class="services">
		<div class="container">
			<div class="row">
				<div class="col-12">

				</div>
			</div>
		</div>
	</section>

	<div class="py-5"></div>

	<!-- Marquee Section -->
	<div class="marquee marquee--primary" role="marquee">
		<div class="marquee__line">
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
		</div>
		<div class="marquee__line">
			Our Services
			Our Services
			Our Services
			Our Services
			Our Services
			Our Services
		</div>
		<div class="marquee__line">
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
			আমাদের সেবাসমূহ
		</div>
	</div>
@endsection


@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush

