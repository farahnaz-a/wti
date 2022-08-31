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
@section('footer_border', ' border-top-0')

{{-- Menu Active --}}
@section('YieldName', 'active')

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
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<img src="{{ asset('assets/frontend/assets/images/illustrations/contact_us.png') }}" alt="Sign In" class="img-fluid">
				</div>
				<div class="col-lg-8 mx-auto">
					<form action="{{ route('home.admission.store') }}" method="POST" class="form" id="admissionForm">
						@csrf
						<h3 class="form-group">একটি <span class="background-stripe background-stripe--right background-stripe--secondary">কোর্স</span> কিনুন</h3>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="আপনার নাম *" required>
									<div class="error-message d-none" id="nameError">
										<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="আপনার ইমেইল *" required>
									<div class="error-message d-none" id="emailError">
										<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="tel" name="phone" id="phone" class="form-control" placeholder="আপনার ফোন নাম্বার *" required>
									<div class="error-message d-none" id="phoneError">
										<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<select name="course_id" id="course_id" class="custom-select" required>
										<option disabled value="" selected>একটি কোর্স নির্বাচন করুন *</option>
										@foreach ($courses as $course)
										<option data-offline="{{ $course->type_offline }}" data-online="{{ $course->type_online }}" value="{{ $course->id }}">{{ $course->title }}</option>
										@endforeach  
									</select>
									<div class="error-message d-none" id="courseError">
										<i class="bi bi-info-circle"></i> অবশ্যই কোর্স নির্বাচন করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<select name="course_type" id="course_type" class="custom-select" required>
										<option disabled value="" selected>কোর্স এর ধরণ *</option>
										{{-- <option value="অফলাইন">অফলাইন</option>
										<option value="অনলাইন">অনলাইন</option> --}}
									</select>
									<div class="error-message d-none" id="typeError">
										<i class="bi bi-info-circle"></i> অবশ্যই কোর্স এর ধরণ নির্বাচন করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<label class="form-label">পেমেন্ট মেথড নির্বাচন করুন <span class="text-danger">*</span></label>
									<div class="row">
										<div class="col-md-4 col-sm-6">
											<label class="custom-option">
												<input type="radio" name="payment_method" value="payment_method--bkash" class="custom-option__input" checked>
												<div class="custom-option__card">
													<div class="custom-option__card__input"></div>
													<img src="{{ asset('assets/frontend/assets/images/icons/bKash.svg') }}" alt="payment logo" class="custom-option__card__image">
												</div>
											</label>
										</div>
										<div class="col-md-4 col-sm-6">
											<label class="custom-option">
												<input type="radio" name="payment_method" value="payment_method--rocket" class="custom-option__input">
												<div class="custom-option__card">
													<div class="custom-option__card__input"></div>
													<img src="{{ asset('assets/frontend/assets/images/icons/rocket.png') }}" alt="payment logo" class="custom-option__card__image">
												</div>
											</label>
										</div>
										<div class="col-md-4 col-sm-6">
											<label class="custom-option">
												<input type="radio" name="payment_method" value="payment_method--nagad" class="custom-option__input">
												<div class="custom-option__card">
													<div class="custom-option__card__input"></div>
													<img src="{{ asset('assets/frontend/assets/images/icons/nagad.svg') }}" alt="payment logo" class="custom-option__card__image">
												</div>
											</label>
										</div>
									</div>
									<div class="payment-process-container">
										<div class="payment-process payment-process--bkash" style="display: none;">
											<div class="payment-process__card">
												<h3>বিকাশ পার্সোনাল নাম্বার</h3>
												<h3 class="background-stripe background-stripe--left background-stripe--secondary">01868 752 464</h3>
												<div class="timeline-list mt-5">
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">১</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ১</h3>
															<p class="timeline-list__item__content__text">উপরে একটি পার্সোনাল বিকাশ নাম্বার দেওয়া আছে প্রথমে আপনাকে ঐ নাম্বারে টাকা পাঠাতে (Send Money) হবে।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">২</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ২</h3>
															<p class="timeline-list__item__content__text">টাকা পাঠানোর পর আপনি যে নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি নিচে (bKash Number) এই ফিল্ডে অ্যাড করেন ।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৩</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৩</h3>
															<p class="timeline-list__item__content__text">বিকাশ থেকে টাকা পাঠানোর পর একটি Transaction ID (TrxID) দেওয়া হয়। আপনি যদি আপনার নিজের পার্সোনাল নাম্বার থেকে টাকা পাঠিয়ে থাকেন তাহলে আপনার মোবাইলের মেসেজ চেক করলেই TrxID পেয়ে যাবেন। আপনি যদি কোন এজেন্ট এর মাধ্যমে অর্থাৎ কোন দোকান থেকে টাকা পাঠিয়ে থাকেন তাহলে এজেন্ট থেকে Transaction ID (TrxID) সংগ্রহ করবেন তারপর নিচে (bKash Transaction ID) এই ফিল্ডে অ্যাড করেন।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৪</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৪</h3>
															<p class="timeline-list__item__content__text">বিকাশ নাম্বার এবং TrxID অ্যাড করার পর Submit Order বাটনে ক্লিক করুন।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৫</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৫</h3>
															<p class="timeline-list__item__content__text">অর্ডার প্লেস করার পর খুব শিগ্রই আমরা আপনার অর্ডারটি চেক করবো এবং আপনি যদি সঠিকভাবে পেমেন্ট করে থাকেন, তাহলে ১২ ঘণ্টার মধ্যে আপনার দেওয়া নাম্বারে যোগাযোগ করা হবে, এবং আপনার দেওয়া ডেলিভারি এড্রেসে ডিভিডিটি পৌঁছে দেওয়া হবে, আর যারা ডাউলোড লিংক অর্ডার করবেন, তাদেরকে সিক্রেট ভিডিও ডাউনলোড লিংকটি দিয়ে দেওয়া হবে</p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<input type="tel" name="bkash_number" id="bkash_number" class="form-control" placeholder="বিকাশ নাম্বারটি এখানে লিখুন *" required>
												<div class="error-message error-message__payment d-none" id="bkashNumberError">
													<i class="bi bi-info-circle"></i>  ঘরটি অবশ্যই পূরণ করতে হবে !
												</div>
											</div>
											<div class="form-group">
												<input type="text" name="bkash_trxID" id="bkash_trxID" class="form-control" placeholder="টাকা পাঠানোর TrxID নাম্বারটি লিখুন *" required>
												<div class="error-message error-message__payment d-none" id="bkashIdError">
													<i class="bi bi-info-circle"></i>  ঘরটি অবশ্যই পূরণ করতে হবে !
												</div>
											</div>
										</div>
										<div class="payment-process payment-process--rocket" style="display: none;">
											<div class="payment-process__card">
												<h3>রকেট পার্সোনাল নাম্বার</h3>
												<h3 class="background-stripe background-stripe--left background-stripe--secondary">01868 752 4643</h3>
												<div class="timeline-list mt-5">
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">১</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ১</h3>
															<p class="timeline-list__item__content__text">উপরে একটি পার্সোনাল রকেট নাম্বার দেওয়া আছে প্রথমে আপনাকে ঐ নাম্বারে টাকা পাঠাতে (Send Money) হবে।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">২</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ২</h3>
															<p class="timeline-list__item__content__text">টাকা পাঠানোর পর আপনি যে নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি নিচে (Rocket Number) এই ফিল্ডে অ্যাড করেন । আপনার ১১ ডিজিটের নাম্বার দিবেন রকেটের লাস্ট ডিজিট অ্যাড করবেন না।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৩</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৩</h3>
															<p class="timeline-list__item__content__text">রকেট থেকে টাকা পাঠানোর পর একটি Transaction ID (TrxID) দেওয়া হয়। আপনি যদি আপনার নিজের পার্সোনাল নাম্বার থেকে টাকা পাঠিয়ে থাকেন তাহলে আপনার মোবাইলের মেসেজ চেক করলেই TrxID পেয়ে যাবেন। আপনি যদি কোন এজেন্ট এর মাধ্যমে অর্থাৎ কোন দোকান থেকে টাকা পাঠিয়ে থাকেন তাহলে এজেন্ট থেকে Transaction ID (TrxID) সংগ্রহ করবেন তারপর নিচে (Rocket Transaction ID) এই ফিল্ডে অ্যাড করেন।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৪</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৪</h3>
															<p class="timeline-list__item__content__text">রকেট নাম্বার এবং TrxID অ্যাড করার পর Submit Order বাটনে ক্লিক করুন।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৫</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৫</h3>
															<p class="timeline-list__item__content__text">অর্ডার প্লেস করার পর খুব শিগ্রই আমরা আপনার অর্ডারটি চেক করবো এবং আপনি যদি সঠিকভাবে পেমেন্ট করে থাকেন, তাহলে ১২ ঘণ্টার মধ্যে আপনার দেওয়া নাম্বারে যোগাযোগ করা হবে, এবং আপনার দেওয়া ডেলিভারি এড্রেসে ডিভিডিটি পৌঁছে দেওয়া হবে, আর যারা ডাউলোড লিংক অর্ডার করবেন, তাদেরকে সিক্রেট ভিডিও ডাউনলোড লিংকটি দিয়ে দেওয়া হবে</p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<input type="tel" name="rocket_number" id="rocket_number" class="form-control" placeholder="রকেট নাম্বারটি এখানে লিখুন *" required>
												<div class="error-message error-message__payment d-none" id="rocketNumberError">
													<i class="bi bi-info-circle"></i>  ঘরটি অবশ্যই পূরণ করতে হবে !
												</div>
											</div>
											<div class="form-group">
												<input type="text" name="rocket_trxID" id="rocket_trxID" class="form-control" placeholder="টাকা পাঠানোর TrxID নাম্বারটি লিখুন *" required>
												<div class="error-message error-message__payment d-none" id="rocketIdError">
													<i class="bi bi-info-circle"></i>  ঘরটি অবশ্যই পূরণ করতে হবে !
												</div>
											</div>
										</div>
										<div class="payment-process payment-process--nagad" style="display: none;">
											<div class="payment-process__card">
												<h3>নগদ পার্সোনাল নাম্বার</h3>
												<h3 class="background-stripe background-stripe--left background-stripe--secondary">01868 752 464</h3>
												<div class="timeline-list mt-5">
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">১</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ১</h3>
															<p class="timeline-list__item__content__text">পার্সোনাল নগদ নাম্বার দেওয়া আছে প্রথমে আপনাকে ঐ নাম্বারে টাকা পাঠাতে (Send Money) হবে।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">২</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ২</h3>
															<p class="timeline-list__item__content__text">টাকা পাঠানোর পর আপনি যে নাম্বার থেকে টাকা পাঠিয়েছেন সেই নাম্বারটি নিচে (Nagad Number) এই ফিল্ডে অ্যাড করেন ।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৩</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৩</h3>
															<p class="timeline-list__item__content__text">নগদ থেকে টাকা পাঠানোর পর একটি Transaction ID (TrxID) দেওয়া হয়। আপনি যদি আপনার নিজের পার্সোনাল নাম্বার থেকে টাকা পাঠিয়ে থাকেন তাহলে আপনার মোবাইলের মেসেজ চেক করলেই TrxID পেয়ে যাবেন। আপনি যদি কোন এজেন্ট এর মাধ্যমে অর্থাৎ কোন দোকান থেকে টাকা পাঠিয়ে থাকেন তাহলে এজেন্ট থেকে Transaction ID (TrxID) সংগ্রহ করবেন তারপর নিচে (Nagad Transaction ID) এই ফিল্ডে অ্যাড করেন।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৪</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৪</h3>
															<p class="timeline-list__item__content__text">নগদ নাম্বার এবং TrxID অ্যাড করার পর Submit Order বাটনে ক্লিক করুন।</p>
														</div>
													</div>
													<div class="timeline-list__item">
														<div class="timeline-list__item__count">৫</div>
														<div class="timeline-list__item__content">
															<h3 class="timeline-list__item__content__title">ধাপ ৫</h3>
															<p class="timeline-list__item__content__text">অর্ডার প্লেস করার পর খুব শিগ্রই আমরা আপনার অর্ডারটি চেক করবো এবং আপনি যদি সঠিকভাবে পেমেন্ট করে থাকেন, তাহলে ১২ ঘণ্টার মধ্যে আপনার দেওয়া নাম্বারে যোগাযোগ করা হবে, এবং আপনার দেওয়া ডেলিভারি এড্রেসে ডিভিডিটি পৌঁছে দেওয়া হবে, আর যারা ডাউলোড লিংক অর্ডার করবেন, তাদেরকে সিক্রেট ভিডিও ডাউনলোড লিংকটি দিয়ে দেওয়া হবে</p>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<input type="tel" name="nagad_number" id="nagad_number" class="form-control" placeholder="নগদ নাম্বারটি এখানে লিখুন *" required>
												<div class="error-message error-message__payment d-none" id="nagadNumberError">
													<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
												</div>
											</div>
											<div class="form-group">
												<input type="text" name="nagad_trxID" id="nagad_trxID" class="form-control" placeholder="টাকা পাঠানোর TrxID নাম্বারটি লিখুন *" required>
												<div class="error-message error-message__payment d-none" id="nagadIdError">
													<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" id="admissionSubmitButton" class="btn btn--primary bubbles-animation bubbles-animation--primary">
									<i class="bi bi-wallet2"></i>
									অর্ডার করুন
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="py-5"></div>

	<!-- Marquee Section -->
	<div class="marquee marquee--primary" role="marquee">
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
	</div>
@endsection

@push('js')
<script>
	$(window).on("load", function(){
		/* Check Payment Active Function */
		$('#bkash_number').prop('disabled', true);
		$('#bkash_trxID').prop('disabled', true);
		$('#rocket_number').prop('disabled', true);
		$('#rocket_trxID').prop('disabled', true);
		$('#nagad_number').prop('disabled', true);
		$('#nagad_trxID').prop('disabled', true);

		let currentCheckedInputValue = $(".custom-option__input:checked").val();

		if(currentCheckedInputValue == "payment_method--bkash"){
			$(".payment-process--bkash").fadeIn();
			$('#bkash_number').prop('disabled', false);
			$('#bkash_trxID').prop('disabled', false);
		}
		else if(currentCheckedInputValue == "payment_method--rocket"){
			$(".payment-process--rocket").fadeIn();
			$('#rocket_number').prop('disabled', false);
			$('#rocket_trxID').prop('disabled', false);
		}
		else if(currentCheckedInputValue == "payment_method--nagad"){
			$(".payment-process--nagad").fadeIn();
			$('#nagad_number').prop('disabled', false);
			$('#nagad_trxID').prop('disabled', false);
		};
	});

	$(document).ready(function () {
		/* Payment Toggler Function */
		$(document).on("change", ".custom-option__input", function(){
			let currentValue = $(this).val();
			$('#bkash_number').prop('disabled', true);
			$('#bkash_trxID').prop('disabled', true);
			$('#rocket_number').prop('disabled', true);
			$('#rocket_trxID').prop('disabled', true);
			$('#nagad_number').prop('disabled', true);
			$('#nagad_trxID').prop('disabled', true);

			if(currentValue == "payment_method--bkash"){
				$(".payment-process--bkash").fadeIn();
				$('#bkash_number').prop('disabled', false);
				$('#bkash_trxID').prop('disabled', false);
			}else{
				$(".payment-process--bkash").fadeOut(); 
			}

			if(currentValue == "payment_method--rocket"){
				$(".payment-process--rocket").fadeIn(); ;
				$('#rocket_number').prop('disabled', false);
				$('#rocket_trxID').prop('disabled', false);
			}else{
				$(".payment-process--rocket").fadeOut();
			}

			if(currentValue == "payment_method--nagad"){
				$(".payment-process--nagad").fadeIn(); 
				$('#nagad_number').prop('disabled', false);
				$('#nagad_trxID').prop('disabled', false);
			}else{
				$(".payment-process--nagad").fadeOut();
			}
		});

		$('#admissionSubmitButton').click(function(e){
			e.preventDefault();
			var name             = $('#name');
			var email            = $('#email');
			var phone            = $('#phone');
			var course_id        = $('#course_id');
			var course_type      = $('#course_type');
			var payment_method   = $(".custom-option__input:checked").val();
			var bkash_number 	 = $('#bkash_number');
			var bkash_trxID 	 = $('#bkash_trxID');
			var rocket_number 	 = $('#rocket_number');
			var rocket_trxID  	 = $('#rocket_trxID');
			var nagad_number	 = $('#nagad_number');
			var nagad_trxID		 = $('#nagad_trxID');
			var errors = [];
			$('.error-message__payment').addClass('d-none'); 

			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
			if(name.val() == ''){
				$('#nameError').removeClass('d-none');  
				errors.push('name')   
			}else{ 
				$('#nameError').addClass('d-none');
				if(errors.indexOf('name')  != -1){ 
					errors = errors.filter(item => item !== 'name') 
				}
			} 
			if(phone.val() == ''){
				$('#phoneError').removeClass('d-none');
				errors.push('phone');
			}else{
				if(phone.val().length > 15){
					$('#phoneError').html('<i class="bi bi-info-circle"></i> ফোন নম্বর সর্বোচ্চ ১৫টি সংখ্যা হতে পারবে !');
					$('#phoneError').removeClass('d-none');
					errors.push('phone');
				}else{

					$('#phoneError').addClass('d-none');
					if(errors.indexOf('phone')  != -1){ 
						errors = errors.filter(item => item !== 'phone') 
					}
				}
			} 

			if(email.val() == ''){
				$('#emailError').removeClass('d-none');
				errors.push('email');
			}else{
				if(!regex.test(email.val())){
					$('#emailError').html('<i class="bi bi-info-circle"></i> আপনার ইমেইলটি সঠিক নয় !'); 
					$('#emailError').removeClass('d-none'); 
					errors.push('email');
				}else{
					if(errors.indexOf('email')  != -1){ 
						errors = errors.filter(item => item !== 'email') 
					}
					$('#emailError').addClass('d-none'); 
				}
			}   

			if(course_id.val() == null){ 
				$('#courseError').removeClass('d-none');
				errors.push('course_id');
			}else{
				$('#courseError').addClass('d-none');
				if(errors.indexOf('course_id')  != -1){ 
					errors = errors.filter(item => item !== 'course_id') 
				}
			}   

			if(course_type.val() == null){
				$('#typeError').removeClass('d-none');
				errors.push('course_type');
			}else{
				$('#typeError').addClass('d-none');
				if(errors.indexOf('course_type')  != -1){ 
					errors = errors.filter(item => item !== 'course_type') 
				}
			}   
			if(payment_method == "payment_method--bkash"){
				if(bkash_number.val() == ''){
					$('#bkashNumberError').removeClass('d-none');
					errors.push('bkash_number');
				}else{
					if(bkash_number.val().length > 15){
						$('#bkashNumberError').html('<i class="bi bi-info-circle"></i> ফোন নম্বর সর্বোচ্চ ১৫টি সংখ্যা হতে পারবে !');
						$('#bkashNumberError').removeClass('d-none');
						errors.push('bkash_number');
					}else{

						$('#bkashNumberError').addClass('d-none');
						if(errors.indexOf('bkash_number')  != -1){ 
							errors = errors.filter(item => item !== 'bkash_number') 
						}
					} 
				} 
				if(bkash_trxID.val() == ''){
					$('#bkashIdError').removeClass('d-none');  
					errors.push('bkash_trxID')   
				}else{ 
					$('#bkashIdError').addClass('d-none');
					if(errors.indexOf('bkash_trxID')  != -1){ 
						errors = errors.filter(item => item !== 'bkash_trxID') 
					}
				} 

			}
			else if(payment_method == "payment_method--rocket"){
				if(rocket_number.val() == ''){
					$('#rocketNumberError').removeClass('d-none');
					errors.push('rocket_number');
				}else{
					if(rocket_number.val().length > 15){
						$('#rocketNumberError').html('<i class="bi bi-info-circle"></i> ফোন নম্বর সর্বোচ্চ ১৫টি সংখ্যা হতে পারবে !');
						$('#rocketNumberError').removeClass('d-none');
						errors.push('rocket_number');
					}else{

						$('#rocketNumberError').addClass('d-none');
						if(errors.indexOf('rocket_number')  != -1){ 
							errors = errors.filter(item => item !== 'rocket_number') 
						}
					} 
				}
				if(rocket_trxID.val() == ''){
					$('#rocketIdError').removeClass('d-none');  
					errors.push('rocket_trxID')   
				}else{ 
					$('#rocketIdError').addClass('d-none');
					if(errors.indexOf('rocket_trxID')  != -1){ 
						errors = errors.filter(item => item !== 'rocket_trxID') 
					}
				} 
			}
			else if(payment_method == "payment_method--nagad"){
				if(nagad_number.val() == ''){
					$('#nagadNumberError').removeClass('d-none');
					errors.push('nagad_number');
				}else{
					if(nagad_number.val().length > 15){
						$('#nagadNumberError').html('<i class="bi bi-info-circle"></i> ফোন নম্বর সর্বোচ্চ ১৫টি সংখ্যা হতে পারবে !');
						$('#nagadNumberError').removeClass('d-none');
						errors.push('nagad_number');
					}else{

						$('#nagadNumberError').addClass('d-none');
						if(errors.indexOf('nagad_number')  != -1){ 
							errors = errors.filter(item => item !== 'nagad_number') 
						}
					} 
				}
				if(nagad_trxID.val() == ''){
					$('#nagadIdError').removeClass('d-none');  
					errors.push('nagad_trxID')   
				}else{ 
					$('#nagadIdError').addClass('d-none');
					if(errors.indexOf('nagad_trxID')  != -1){ 
						errors = errors.filter(item => item !== 'nagad_trxID') 
					}
				} 
			};

			if(errors.length == 0){ 
				$('#admissionForm').submit();
			} else{ 
				if(errors.includes('name')){
					name.focus();
				}else if(errors.includes('email')){
					email.focus();
				}else if(errors.includes('phone')){
					phone.focus();
				}else if(errors.includes('course_id')){
					course_id.focus();
				}else if(errors.includes('course_type')){
					course_type.focus();
				}else if(errors.includes('bkash_number')){
					bkash_number.focus();
				}else if(errors.includes('bkash_trxID')){
					bkash_trxID.focus();
				}else if(errors.includes('rocket_number')){
					rocket_number.focus();
				}else if(errors.includes('rocket_trxID')){
					rocket_trxID.focus();
				}else if(errors.includes('nagad_number')){
					nagad_number.focus();
				}else if(errors.includes('nagad_trxID')){
					nagad_trxID.focus();
				}
			}
		});

		$('#course_id').change(function(){
			var type_offline  = $('#course_id option:selected').attr('data-offline');
			var type_online  = $('#course_id option:selected').attr('data-online');
			var options = '<option disabled value="" selected>কোর্স এর ধরণ *</option>';
			if(type_offline == 'yes'){
				options += `<option value="অফলাইন">অফলাইন</option>`;
			}
			if(type_online == 'yes'){
				options += `<option value="অনলাইন">অনলাইন</option>`;
			} 
			$('#course_type').html(options);
		});


	});
</script>
@endpush
