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
@section('active') @endsection

{{-- Stye  --}}
@push('css')
<style>
    
</style>
@endpush

{{-- Main Content --}}
@section('content')
	<!-- Contact Section -->
	<div class="contact overflow-hidden--x">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-xl-5 col-lg-6 col-md-8 mx-auto">
					<img src="{{ asset('assets/frontend/assets/images/illustrations/contact_us.png') }}" alt="Sign In" class="img-fluid">
					<form action="#!" class="form">
						<h3 class="form-group">সাইন ইন করুন</h3>
						<p>রেজিস্ট্রেশনের সময় যে ই-মেইল এড্রেস এবং পাসওয়ার্ড দিয়ে অ্যাকাউন্ট ওপেন করেছেন সেই একই তথ্য দিয়ে সাইন ইন করুন। </p>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="আপনার ইমেইল *" required>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<div class="input-group password-wrapper">
										<input type="password" name="password" class="form-control password-input" placeholder="কনফার্ম পাসওয়ার্ড *" required>
										<div class="input-group-append">
											<button type="button" class="input-group-text password-toggler">
												<i class="bi bi-eye-fill"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn--primary bubbles-animation bubbles-animation--primary">
									লগইন
									<i class="bi bi-box-arrow-in-right"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="py-5"></div>
@endsection

@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush
