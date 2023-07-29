<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            ['question' => 'Success Mind Institute থেকে কেন আপনি কোর্স করবেন?', 'answer' => '<ul class="styled-list">
            <li class="styled-list__item">অভিজ্ঞ মেন্টর দিয়ে পরিচালিত প্রতিটি কোর্স তৈরি।</li>
            <li class="styled-list__item">আপডেটেড কারিকুলাম ফলো করে তৈরি প্রতিটি রেকর্ডেড ভিডিও কোর্স।</li>
            <li class="styled-list__item">জব ওরিয়েন্টেড কোর্স মডিউল।</li>
            <li class="styled-list__item">কোর্স রিলেটেড প্রতিটি বিষয় সহজ ও সুন্দরভাবে ব্যাখ্যা করা হয়।</li>
            <li class="styled-list__item">হাতে কলমে প্র্যাক্টিস করার জন্য অসাধারণ প্রজেক্ট আছে আমাদের প্রায় প্রতিটি কোর্সেই।</li>
            <li class="styled-list__item">নিজেকে যাচাই করার জন্য আছে একাধিক এক্সাম দেয়ার ব্যবস্থা।</li>
            <li class="styled-list__item">প্রতিটি লেকচার অনেক বেশি ইনফরমেটিভ এবং একইসাথে ইন্টারেক্টিভ, যা আপনার মনোযোগ ধরে রাখতে হেল্পফুল</li>
            <li class="styled-list__item">প্রতিটি কোর্স ক্যারিয়ার ডেভেলপমেন্টের ক্ষেত্রে সহায়ক।</li>
            <li class="styled-list__item">কোর্স ফি আপনার সাধ্যের মধ্যে।</li>
        </ul>'],
            ['question' => 'কোর্স শেষে কি সার্টিফিকেট পাবো?', 
            'answer'    => '<p class="faq-card__body__text">কোন কোর্সে ভর্তি হয়ে লেকচার, কুইজ বা এক্সাম সফলভাবে শেষ করার পর অটোমেটিকভাবেই আপনি ঐ কোর্সটির Accomplishment সার্টিফিকেট পাবেন।</p>'],
            ['question' => 'সার্টিফিকেট কিভাবে পাবো?', 
            'answer'    => '<p class="faq-card__body__text">কোর্স শেষে আমাদের ওয়েবসাইট থেকে সার্টিফিকেট ডাউনলোড করতে পারবেন। প্রয়োজনে প্রিন্ট করে নিজের কাছে সংরক্ষণ করতেও পারবেন।'],
            ['question' => 'কোর্স ভিডিও ডাউনলোড করার কোন অপশন আছে কিনা?', 
            'answer'    => '<p class="faq-card__body__text">না। ভিডিও ডাউনলোড করার কোন অপশন নেই। কোর্সটি করতে অবশ্যই লগইন করে এক্সেস নিতে হবে।</p>'],
        ];

        foreach($faqs as $faq){
            Faq::create([
                'question' => $faq['question'],
                'answer' => $faq['answer'],
            ]);
        }
    }
}
