@extends('frontend.layouts.app')

{{-- Site title  --}}
@section('title', 'Success Mind Institute')

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

{{-- Menu Active --}}
@section('contactActive', 'active')

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
								<a href="mailto:successmindinstitute@gmail.com" class="contact__list__item__text">successmindinstitute@gmail.com</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--phone">
								<i class="bi bi-telephone"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের ফোন নাম্বার</h3>
								<a href="tel:01643390112" class="contact__list__item__text">016 4339 0112</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--whatsapp">
								<i class="bi bi-whatsapp"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের হোয়াটসঅ্যাপ নাম্বার</h3>
								<a href="tel:01643390112" class="contact__list__item__text">016 4339 0112</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--facebook">
								<i class="bi bi-facebook"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের ফেসবুক পেইজ</h3>
								<a href="https://www.facebook.com/successmindinstitute" target="_blank" class="contact__list__item__text">@successmindinstitute</a>
							</div>
						</div>
						<div class="contact__list__item">
							<div class="contact__list__item__icon contact__list__item__icon--facebook">
								<i class="bi bi-facebook"></i>
							</div>
							<div class="contact__list__item__content">
								<h3 class="contact__list__item__title">আমাদের ফেসবুক গ্রুপ</h3>
								<a href="https://www.facebook.com/groups/successmindinstitute" target="_blank" class="contact__list__item__text">groups/successmindinstitute</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6 ml-auto">
					<form action="#!" class="form">
						<div class="success-message success-message__contact d-none">

						</div>
						<h3 class="form-group">আপনার তথ্য দিন</h3>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<input type="text" name="name" id="name" class="form-control" placeholder="আপনার নাম *" required>
									<div class="error-message error-message__contact  d-none nameError">
										<i class="bi bi-info-circle"></i> <span id="nameError"></span>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="আপনার ইমেইল *" required>
									<div class="error-message error-message__contact  d-none emailError">
										<i class="bi bi-info-circle"></i> <span id="emailError"></span>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<input type="tel" name="phone" id="phone" class="form-control" placeholder="আপনার ফোন নাম্বার *" required>
									<div class="error-message error-message__contact  d-none phoneError">
										<i class="bi bi-info-circle"></i> <span id="phoneError"></span>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<select name="category_id" id="category_id" class="custom-select">
										<option disabled value="0" selected>ক্যাটাগরি সিলেক্ট করুন</option>
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
									<textarea name="message" id="message" rows="6" class="form-control" placeholder="বিস্তারিত লিখুন"></textarea>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="button" id="sendMessage" class="btn btn--primary bubbles-animation bubbles-animation--primary">
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
				<div class="col-12 section-header text-center">
					<h1 class="section-header__title"><span class="background-stripe background-stripe--left background-stripe--primary">সচরাচর</span> জানতে চাওয়া <span class="background-stripe background-stripe--right background-stripe--secondary">প্রশ্নের উত্তর</span></h1>
				</div>
				<div class="col-12">
					<div class="accordion" id="faqAccordionParent">
						<div class="faq-card">
							<button class="faq-card__header" type="button" data-toggle="collapse" data-target="#faqCollapse1" aria-expanded="true">
								<div class="faq-card__header__container">
									<div class="faq-card__header__icon"></div>
									<h3 class="faq-card__header__title">Success Mind Institute থেকে কেন আপনি কোর্স করবেন?</h3>
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
					<img src="{{ asset('assets/frontend/assets/images/illustrations/contact_us.png') }}" alt="Contact Image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
<script>
    $(document).ready(function(){
		$('#sendMessage').click(function(e){
            e.preventDefault();
            var name             = $('#name');
            var email            = $('#email');
            var phone            = $('#phone');
            var category         = $('#category_id');
            var message			 = $('#message');

			$.ajax({
				type : "post",
				url  : "{{ route('home.contact.store') }}",
				data : {
					name 		:name.val(),
					email 		:email.val(),
					phone 		:phone.val(),
					category 	:category.val(),
					message 	:message.val(),
				},
				success : function(response){
					$('.form').trigger('reset');
					$('.error-message__contact').addClass('d-none');
					$('.success-message__contact').removeClass('d-none');
					$('.success-message__contact').html('<i class="bi bi-check-circle"></i>' +response);

				},
				error : function(errors){
					$('.success-message__contact').addClass('d-none');
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


            // var errors = [];
            // var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            // if(name.val() == ''){
            //     $('#nameError').removeClass('d-none');
            //     errors.push('name')
            // }else{
            //     $('#nameError').addClass('d-none');
            //     if(errors.indexOf('name')  != -1){
            //         errors = errors.filter(item => item !== 'name')
            //     }
            // }
            // if(phone.val() == ''){
            //     $('#phoneError').removeClass('d-none');
            //     errors.push('phone');
            // }else{
            //     if(phone.val().length > 15){
            //         $('#phoneError').html('<i class="bi bi-info-circle"></i> ফোন নম্বর সর্বোচ্চ ১৫টি সংখ্যা হতে পারবে !');
            //         $('#phoneError').removeClass('d-none');
            //         errors.push('phone');
            //     }else{

            //         $('#phoneError').addClass('d-none');
            //         if(errors.indexOf('phone')  != -1){
            //             errors = errors.filter(item => item !== 'phone')
            //         }
            //     }
            // }

            // if(email.val() == ''){
            //     $('#emailError').removeClass('d-none');
            //     errors.push('email');
            // }else{
            //     if(!regex.test(email.val())){
            //         $('#emailError').html('<i class="bi bi-info-circle"></i> আপনার ইমেইলটি সঠিক নয় !');
            //         $('#emailError').removeClass('d-none');
            //         errors.push('email');
            //     }else{
			// 		if(errors.indexOf('email')  != -1){
			// 			errors = errors.filter(item => item !== 'email')
			// 		}
			// 		$('#emailError').addClass('d-none');

            //     }
            // }
			// if(errors.length == 0){
			// 	$('.form').submit();
			// }
        });
    });
</script>
@endpush
