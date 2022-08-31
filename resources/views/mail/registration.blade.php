@component('mail::message')
    <h2>ধন্যবাদ !! আপনাকে একাউন্ট তৈরি করার জন্য।</h2>
    <h5>আপনার লগইন তথ্য:</h5>
    <span>ইমেইল - {{ $email }}</span> <br>
    <span>পাসওয়ার্ড - {{ $password }}</span> <br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent