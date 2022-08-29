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
	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-6">
					<div class="contact__header">
						<h1 class="contact__title">আমাদের সাথে যোগাযোগ</h1>
						<p class="contact__text">যে কোনো প্রয়োজনে যোগাযোগ করতে সরাসরি আমাদের অফিস ভিজিট করতে পারেন। তাছাড়া হটলাইন নম্বরে কল করে জেনে নিতে পারেন ট্রেইনিং সংক্রান্ত যেকোনো তথ্য। এছাড়াও উল্লেখিত মেইলে কিংবা ফেসবুক ম্যাসেঞ্জারেও নক দিতে পারেন।</p>
					</div>
					<div class="contact__list mb-5">
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--mail">
								<i class="bi bi-envelope"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের একটি ইমেইল পাঠান</h3>
								<a href="mailto:demo@demo.com" class="contact__list__item__text">demo@demo.com</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--phone">
								<i class="bi bi-telephone"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের ফোন নাম্বার</h3>
								<a href="tel:+012345678910" class="contact__list__item__text">012 3456 7891</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--whatsapp">
								<i class="bi bi-whatsapp"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের হোয়াটসঅ্যাপ নাম্বার</h3>
								<a href="tel:+012345678910" class="contact__list__item__text">012 3456 7891</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--facebook">
								<i class="bi bi-facebook"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের ফেসবুক গ্রুপ</h3>
								<a href="http://www.facebook.com/" target="_blank" class="contact__list__item__text">webtraininginstitute</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 ml-auto">
					<form action="#!" class="form">
						<h3 class="form-group">আপনার তথ্য দিন</h3>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<input type="text" name="name" class="form-control" placeholder="আপনার নাম *" required>
									<div class="error-message">
										<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="email" name="email" class="form-control" placeholder="আপনার ইমেইল *" required>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="tel" name="phone" class="form-control" placeholder="আপনার ফোন নাম্বার *" required>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<select name="phone" class="custom-select">
										<option disabled value="" selected>ক্যাটাগরি সিলেক্ট করুন</option>
										<option value="1">Technical</option>
										<option value="2">Business</option>
										<option value="3">Payment</option>
										<option value="4">Report</option>
										<option value="6">Course Issue</option>
										<option value="5">Others</option>
									</select>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<textarea name="details" rows="6" class="form-control" placeholder="বিস্তারিত লিখুন"></textarea>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="submit" class="btn btn--primary bubbles-animation bubbles-animation--primary">
									সাবমিট
									<i class="bi bi-send"></i>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- FAQ Section -->
	<div class="faq section-gap pb-0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="accordion" id="faqAccordionParent">
						<div class="faq-card">
							<button class="faq-card__header" type="button" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="true">
								<div class="faq-card__header__container">
									<div class="faq-card__header__icon"></div>
									<h3 class="faq-card__header__title">Web Training Institute থেকে কেন আপনি কোর্স করবেন?</h3>
								</div>
							</button>
						
							<div id="faqCollapse1" class="collapse show" data-parent="#faqAccordionParent">
								<div class="faq-card__body">
									<ul class="styled-list">
										<li class="styled-list__item">অভিজ্ঞ মেন্টর দিয়ে পরিচালিত প্রতিটি কোর্স তৈরি।</li>
										<li class="styled-list__item">আপডেটেড কারিকুলাম ফলো করে তৈরি প্রতিটি রেকর্ডেড ভিডিও কোর্স।</li>
										<li class="styled-list__item">জব ওরিয়েন্টেড কোর্স মডিউল।</li>
										<li class="styled-list__item">কোর্স রিলেটেড প্রতিটি বিষয় সহজ ও সুন্দরভাবে ব্যাখ্যা করা হয়।</li>
										<li class="styled-list__item">হাতে কলমে প্র্যাক্টিস করার জন্য অসাধারণ প্রজেক্ট আছে আমাদের প্রায় প্রতিটি কোর্সেই।</li>
										<li class="styled-list__item">নিজেকে যাচাই করার জন্য আছে একাধিক এক্সাম দেয়ার ব্যবস্থা।</li>
										<li class="styled-list__item">প্রতিটি লেকচার অনেক বেশি ইনফরমেটিভ এবং একইসাথে ইন্টারেক্টিভ, যা আপনার মনোযোগ ধরে রাখতে হেল্পফুল</li>
										<li class="styled-list__item">প্রতিটি কোর্স ক্যারিয়ার ডেভেলপমেন্টের ক্ষেত্রে সহায়ক। </li>
										<li class="styled-list__item">কোর্স ফি আপনার সাধ্যের মধ্যে। </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="faq-card">
							<button class="faq-card__header collapsed" type="button" data-toggle="collapse" data-target="#faqCollapse2" aria-expanded="false">
								<div class="faq-card__header__container">
									<div class="faq-card__header__icon"></div>
									<h3 class="faq-card__header__title">কোর্স শেষে কি সার্টিফিকেট পাবো?</h3>
								</div>
							</button>
							
							<div id="faqCollapse2" class="collapse" data-parent="#faqAccordionParent">
								<div class="faq-card__body">
									<p class="faq-card__body__text">কোন কোর্সে ভর্তি হয়ে লেকচার, কুইজ বা এক্সাম সফলভাবে শেষ করার পর অটোমেটিকভাবেই আপনি ঐ কোর্সটির Accomplishment সার্টিফিকেট পাবেন।</p>
								</div>
							</div>
						</div>
						<div class="faq-card">
							<button class="faq-card__header collapsed" type="button" data-toggle="collapse" data-target="#faqCollapse3" aria-expanded="false">
								<div class="faq-card__header__container">
									<div class="faq-card__header__icon"></div>
									<h3 class="faq-card__header__title">সার্টিফিকেট কিভাবে পাবো?</h3>
								</div>
							</button>
							
							<div id="faqCollapse3" class="collapse" data-parent="#faqAccordionParent">
								<div class="faq-card__body">
									<p class="faq-card__body__text">কোর্স শেষে আমাদের ওয়েবসাইট থেকে সার্টিফিকেট ডাউনলোড করতে পারবেন। প্রয়োজনে প্রিন্ট করে নিজের কাছে সংরক্ষণ করতেও পারবেন।</p>
								</div>
							</div>
						</div>
						<div class="faq-card">
							<button class="faq-card__header collapsed" type="button" data-toggle="collapse" data-target="#faqCollapse4" aria-expanded="false">
								<div class="faq-card__header__container">
									<div class="faq-card__header__icon"></div>
									<h3 class="faq-card__header__title">কোর্স ভিডিও ডাউনলোড করার কোন অপশন আছে কিনা?</h3>
								</div>
							</button>
							
							<div id="faqCollapse4" class="collapse" data-parent="#faqAccordionParent">
								<div class="faq-card__body">
									<p class="faq-card__body__text">না। ভিডিও ডাউনলোড করার কোন অপশন নেই। কোর্সটি করতে অবশ্যই লগইন করে এক্সেস নিতে হবে।</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 text-center pt-5">
					<img src="./assets/images/illustrations/contact_us.png" alt="Contact Image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
<script>
    $(document).ready(function(){

    });
</script>
@endpush
