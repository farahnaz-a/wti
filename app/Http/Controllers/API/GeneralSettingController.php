<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;
use PDO;

class GeneralSettingController extends Controller
{
    public function index(){
        $setting = GeneralSetting::first();

        return response()->json(['settings' => [
            'logo' => asset('uploads/settings/logo').'/'.$setting->logo,
            'phone' => $setting->phone,
            'email' => $setting->email,
            'whatsapp_number' => $setting->whatsapp_number,
            'facebook_group_name' => $setting->facebook_group_name,
            'facebook_group_link' => $setting->facebook_group_link,
            'facebook_page_name' => $setting->facebook_page_name,
            'facebook_page_link' => $setting->facebook_page_link,
        ]]);
    }

    public function banner(){
        return response()->json(['banner' => [
            'title' => 'লক্ষ্য হোক স্বপ্ন বাস্তবায়ন',
            'sub_title' => 'অভিজ্ঞ মেন্টর আর আপডেটেড কারিকুলাম নিয়ে সাকসেস মাইন্ড ইনস্টিটিউট প্রস্তুত আপনার ক্যারিয়ার গড়ার অগ্রযাত্রায়। আমাদের ট্রেন্ডি কোর্স থেকে আজই বেছে নিন আপনার পছন্দের কোর্স। এবং ঘরে বসেই নিজের স্কিল ডেভেলপ করুন- সেরা এক্সপার্টদের কাছ থেকে!',
        ]]);
    }

    public function contactStore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required', 
        ]);
        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'category_id' => $request->category_id,
            'message' => $request->message,
        ]);
        return response()->json(['status' => 'success'], 200);
    }
}
