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
        Course::create([
            'title'                     => 'ওয়েব ডিজাইন',
            'category_id'               => '1',
            'feature_image'             => '1.jpg',
            'feature_video'             => '1.mp4',
            'lecture_amount'            => '32',
            'exam_amount'               => '3',
            'description'               => 'আপাতত কোনো ডেসক্রিপশন নাই পরে দিয়ে দিবো।',
            'course_fee_offline'        => '12000',
            'course_fee_online'         => '10000',
            'course_discount_offline'   => '0.00',
            'course_discount_online'    => '0.00',
            'course_duration_offline'   => '৪ মাস',
            'course_duration_online'    => '৪ মাস',
            'mentor_id'                 => '1',
        ]); 
        Course::create([
            'title'                     => 'ওয়েব ডেভেলপমেন্ট',
            'category_id'               => '1',
            'feature_image'             => '1.jpg',
            'feature_video'             => '1.mp4',
            'lecture_amount'            => '32',
            'exam_amount'               => '3',
            'description'               => 'আপাতত কোনো ডেসক্রিপশন নাই পরে দিয়ে দিবো।',
            'course_fee_offline'        => '12000',
            'course_fee_online'         => '10000',
            'course_discount_offline'   => '0.00',
            'course_discount_online'    => '0.00',
            'course_duration_offline'   => '৪ মাস',
            'course_duration_online'    => '৪ মাস',
            'mentor_id'                 => '1',
        ]); 
        Course::create([
            'title'                     => 'ওয়েব ডিজাইন এন্ড ডেভেলপমেন্ট',
            'category_id'               => '1',
            'feature_image'             => '1.jpg',
            'feature_video'             => '1.mp4',
            'lecture_amount'            => '32',
            'exam_amount'               => '3',
            'description'               => 'আপাতত কোনো ডেসক্রিপশন নাই পরে দিয়ে দিবো।',
            'course_fee_offline'        => '20000',
            'course_fee_online'         => '16000',
            'course_discount_offline'   => '0.00',
            'course_discount_online'    => '0.00',
            'course_duration_offline'   => '৪ মাস',
            'course_duration_online'    => '৪ মাস',
            'mentor_id'                 => '1', 
        ]); 
    }
}
