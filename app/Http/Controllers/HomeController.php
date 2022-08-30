<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    // home page 
    public function index(){
        return view('frontend.index');
    }

    // Contact page
    public function contact(){
        return view('frontend.contact');
    }

    // Contact message store
    public function contactStore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|max:15', 
        ], [
            'name.required' => 'ঘরটি অবশ্যই পূরণ করতে হবে !',
            'email.required' => 'ঘরটি অবশ্যই পূরণ করতে হবে !',
            'email.email' => 'আপনার ইমেইলটি সঠিক নয় !',
            'phone.required' => 'ঘরটি অবশ্যই পূরণ করতে হবে !',
            'phone.max' => 'ফোন নম্বর সর্বোচ্চ ১৫টি সংখ্যা হতে পারবে !',
        ]);
        ContactMessage::create($request->except('_token'));
        return response('আপনার ফরমটি সাবমিট হয়েছে ।');
    }

    // Newsletter store
    public function newsletterStore(Request $request){
        $request->validate([ 
            'email' => 'required|email|unique:subscribers',  
        ], [ 
            'email.required' => 'ঘরটি অবশ্যই পূরণ করতে হবে !',
            'email.email' => 'আপনার ইমেইলটি সঠিক নয় !',
            'email.unique' => 'এই ইমেইলটি আগেও ব্যবহার করা হয়েছে !',
        ]);
        Subscriber::create($request->except('_token'));
        return response('আপনার ফরমটি সাবমিট হয়েছে ।');
    }

    // Check email unique
    public function emailCheck(Request $request){
        $result = User::where('email', $request->email)->exists();
        return response($result);
    }

    // Register New user 
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => bcrypt($request->password),
        ]);
        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]); 

        return to_route('home.index');
    }


    // END
}
