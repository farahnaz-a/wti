<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();
        Course::create([
            'title'                     => 'ওয়েব ডিজাইন',
            'slug'                      => 'ওয়েব-ডিজাইন',
            'subtitle'                  => 'React দিয়ে ওয়েব ডিজাইন শিখুন',
            'description'               => 'বর্তমান যুগে ওয়েব ডিজাইনের চাহিদা তুঙ্গে।  তাই যুগের সাথে তাল মেলাতে ও ক্যারিয়ারে সবার থেকে নিজেকে এগিয়ে রাখতে রেসপন্সিভ <span class="background-stripe background-stripe--left background-stripe--secondary">ওয়েব ডিজাইনার</span> শিখুন আমাদের সাথে।',
            'feature'                   => 'আকর্ষণীয় Website তৈরির Basic Knowledge এবং CSS3 সম্পর্কে বিস্তারিত ধারণা--HTML5 সম্পর্কে Details Idea, HTML5 ব্যবহার করে Basic Web Page তৈরি--ওয়েব পেজের LayOut ডিজাইন এবং Slider তৈরি--ওয়েব সাইটের Image Insert পদ্ধতি--CSS3 ব্যবহার করে Styling Web Page তৈরি--UI /UX কে HTML এ কনভার্ট করার পদ্ধতি--কাঠামোগত Project তৈরি সম্পর্কে বিস্তারিত আইডিয়া--ওয়েব ডিজাইন শিখে Freelancing শুরু করার ধাপসমূহ',
            'project_amount'            => '১৫',
            'category_id'               => '1',
            'feature_image'             => 'design.webp',
            'feature_video'             => '1.mp4',
            'feature_video_thumbnail'   => 'design-video-thumbnail.webp',
            'lecture_amount'            => '৩২',
            'exam_amount'               => '২',
            'course_fee_offline'        => '২৫,০০০',
            'course_fee_online'         => '১৫,০০০',
            'course_discount_offline'   => '১০,০০০',
            'course_discount_online'    => '৬,০০০',
            'course_duration_offline'   => '৪ মাস',
            'course_duration_online'    => '৪ মাস',
            'mentor_id'                 => '1',
        ]);
        Course::create([
            'title'                     => 'ওয়েব ডেভেলপমেন্ট',
            'slug'                      => 'ওয়েব-ডেভেলপমেন্ট',
            'subtitle'                  => 'Laravel দিয়ে ওয়েব ডেভেলপমেন্ট শিখুন',
            'description'               => 'ওয়েব ডেভেলপমেন্টের জন্য লারাভেল যেমন বেশ পপুলাট একটি ফ্রেমওয়ার্ক তেমন চাকরির বাজারেও রয়েছে দারুণ  চাহিদা।  আমরা নিয়ে এসেছি লারাভেল দিয়ে পরিপূর্ণ <span class="background-stripe background-stripe--left background-stripe--secondary">ওয়েব ডেভেলপমেন্ট</span> কোর্স। তাই এখুনি যোগ দিন আমাদের সাথে।',
            'feature'                   => 'লারাভেল বেসিক--ওয়েবসাইটের জন্য ডাটাবেজ তৈরী--লারাভেল দিয়ে অথেনটিকেশন--লারাভেল দিয়ে Api তৈরী--স্ট্যাটিক ওয়েবসাইট  থেকে ডায়নামিক ওয়েব সাইটে রূপান্তর--AJAX এর ব্যাবহার--হোস্টিং  সম্পর্কে ধারণা--সার্ভার ম্যানেজমেন্ট সম্পর্কিত বেসিক ধারণা',
            'project_amount'            => '১৫',
            'category_id'               => '1',
            'feature_image'             => 'development.webp',
            'feature_video'             => '1.mp4',
            'feature_video_thumbnail'   => 'development-video-thumbnail.webp',
            'lecture_amount'            => '৪৮',
            'exam_amount'               => '৩',
            'course_fee_offline'        => '৩০,০০০',
            'course_fee_online'         => '২০,০০০',
            'course_discount_offline'   => '১২,০০০',
            'course_discount_online'    => '৮,০০০',
            'course_duration_offline'   => '৬ মাস',
            'course_duration_online'    => '৬ মাস',
            'mentor_id'                 => '1',
        ]);
        Course::create([
            'title'                     => 'ফুলস্ট্যাক ওয়েব ডেভেলপমেন্ট',
            'slug'                      => 'ফুলস্ট্যাক-ওয়েব-ডেভেলপমেন্ট',
            'subtitle'                  => 'ফুলস্ট্যাক ওয়েব ডেভেলপমেন্ট উইথ PHP এন্ড Laravel',
            'description'               => 'যেকোন ওয়েব সাইটের ২টি দিক থাকে প্রথমটি ওয়েব ডিজাইন (ফন্টএন্ড) ও ওয়েব ডেভেলপমেন্ট (ব্যাকএন্ড)। একজন সফল ডেভলাপার হয়ার জন্য প্রয়োজন এই দুটি সম্পর্কে ধারণ রাখা। আর এজন্য আমরা নিয়ে এসেছি <span class="background-stripe background-stripe--left background-stripe--secondary">ফুলস্ট্যাক</span> ওয়েব ডেভেলপমেন্ট কোর্স।',
            'feature'                   => 'আকর্ষণীয় Website তৈরির Basic Knowledge এবং CSS3 সম্পর্কে বিস্তারিত ধারণা--HTML5 সম্পর্কে Details Idea, HTML5 ব্যবহার করে Basic Web Page তৈরি--ওয়েব পেজের LayOut ডিজাইন এবং Slider তৈরি--ওয়েব সাইটের Image Insert পদ্ধতি--CSS3 ব্যবহার করে Styling Web Page তৈরি--UI /UX কে HTML এ কনভার্ট করার পদ্ধতি--কাঠামোগত Project তৈরি সম্পর্কে বিস্তারিত আইডিয়া--ওয়েব ডিজাইন শিখে Freelancing শুরু করার ধাপসমূহ--লারাভেল বেসিক--ওয়েবসাইটের জন্য ডাটাবেজ তৈরী--লারাভেল দিয়ে অথেনটিকেশন--লারাভেল দিয়ে Api তৈরী--স্ট্যাটিক ওয়েবসাইট  থেকে ডায়নামিক ওয়েব সাইটে রূপান্তর--AJAX এর ব্যাবহার--হোস্টিং  সম্পর্কে ধারণা--সার্ভার ম্যানেজমেন্ট সম্পর্কিত বেসিক ধারণা',
            'project_amount'            => '২৫',
            'category_id'               => '1',
            'feature_image'             => 'full-stack.webp',
            'feature_video'             => '1.mp4',
            'feature_video_thumbnail'   => 'full-stack-video-thumbnail.webp',
            'lecture_amount'            => '৬৪',
            'exam_amount'               => '৫',
            'course_fee_offline'        => '৪৫,০০০',
            'course_fee_online'         => '৩০,০০০',
            'course_discount_offline'   => '১৮,০০০',
            'course_discount_online'    => '১২,০০০',
            'course_duration_offline'   => '৮ মাস',
            'course_duration_online'    => '৮ মাস',
            'mentor_id'                 => '1',
        ]);
    }
}
