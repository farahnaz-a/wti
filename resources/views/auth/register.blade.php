
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
@section('register', 'active')

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
					<form method="POST" action="{{ route('home.register') }}" class="form">
                        @csrf
						<h3 class="form-group">অ্যাকাউন্ট তৈরি করুন</h3>
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
									<div class="input-group password-wrapper">
										<input type="password" name="password" id="password" class="form-control password-input" placeholder="পাসওয়ার্ড *" required>
										<div class="input-group-append">
											<button type="button" class="input-group-text password-toggler">
												<i class="bi bi-eye-fill"></i>
											</button>
										</div>
									</div>
                                    <div class="error-message d-none" id="passwordError">
										<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<div class="input-group password-wrapper">
										<input type="password" name="confirm_password" id="confirm_password" class="form-control password-input" placeholder="কনফার্ম পাসওয়ার্ড *" required>
										<div class="input-group-append">
											<button type="button" class="input-group-text password-toggler">
												<i class="bi bi-eye-fill"></i>
											</button>
										</div>
									</div>
									<div class="error-message d-none" id="confirmPasswordError">
										<i class="bi bi-info-circle"></i> ঘরটি অবশ্যই পূরণ করতে হবে !
									</div>
								</div>
							</div>
							<div class="col-12 text-center">
								<button type="button" id="regiserUser" class="btn btn--primary bubbles-animation bubbles-animation--primary">
									<i class="bi bi-plus-square"></i>
									সাইন আপ
								</button>
							</div>
						</div>
						<div class="form-footer text-center">
							<p class="form-footer__text">যদি কোন একাউন্ট থাকে তাহলে <a href="{{ url('/login') }}" class="form-footer__link bubbles-animation bubbles-animation--primary">লগইন</a> করুন</p>
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
        $('#regiserUser').click(function(e){
            e.preventDefault();
            var name             = $('#name');
            var email            = $('#email');
            var phone            = $('#phone');
            var password         = $('#password');
            var confirm_password = $('#confirm_password');
            var errors = [];
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
            if(password.val() == ''){
                $('#passwordError').removeClass('d-none');
                errors.push('password');
            }else{ 
                if(password.val().length < 8){
                    $('#passwordError').html('<i class="bi bi-info-circle"></i> পাসওয়ার্ড সর্বনিম্ন ৮ টি সংখ্যা হতে হবে !'); 
                    $('#passwordError').removeClass('d-none');
                    errors.push('password');
                }else{
                    $('#passwordError').addClass('d-none');
                    if(errors.indexOf('password')  != -1){ 
                        errors = errors.filter(item => item !== 'password') 
                    }
                }
            }

            if(confirm_password.val() == ''){
                $('#confirmPasswordError').removeClass('d-none');
                errors.push('confirmPassword');
            }else{
                if(confirm_password.val() != password.val()){
                    $('#confirmPasswordError').html('<i class="bi bi-info-circle"></i> পাসওয়ার্ড একই হতে হবে !'); 
                    $('#confirmPasswordError').removeClass('d-none');
                    errors.push('confirmPassword');
                }else{
                    $('#confirmPasswordError').addClass('d-none');
                    if(errors.indexOf('confirmPassword')  != -1){ 
                        errors = errors.filter(item => item !== 'confirmPassword') 
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
                    $.ajax({
                        type : "post",
                        url  : "{{ route('email.check') }}",
                        data : {
                            email : email.val(),
                        },
                        success: function(response){
                            if(response == 1){
                                $('#emailError').html('<i class="bi bi-info-circle"></i> এই ইমেইলটি আগেও ব্যবহার করা হয়েছে !'); 
                                $('#emailError').removeClass('d-none'); 
                                errors.push('email');
                            }else{
                                if(errors.indexOf('email')  != -1){ 
                                    errors = errors.filter(item => item !== 'email') 
                                }
                                if(errors.length == 0){ 
                                    $('#emailError').addClass('d-none'); 
                                    $('.form').submit();
                                } 
                            }
                        },
                    }); 
                   
                }
            }             
        });
    });
</script>
@endpush

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

