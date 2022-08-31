<?php

namespace App\Http\Controllers;

use App\Mail\AdmissionMail;
use App\Mail\RegisterMail;
use App\Models\Admission;
use App\Models\ContactMessage;
use App\Models\Course;
use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        
        Mail::to($request->email)->send(new RegisterMail($request->email, $request->password));

        Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]); 

        return to_route('dashboard');
    }

    // Admission Page 
    public function adminssion(){
        $courses = Course::where('status', 'active')->get();
        return view('frontend.admission', compact('courses'));
    }

    // Admission store 
    public function admissionStore(Request $request){
        $request->validate([
            'name'              => 'required',
            'email'             => 'required|email',
            'phone'             => 'required', 
            'course_id'         => 'required', 
            'course_type'       => 'required', 
            'payment_method'    => 'required',  
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->phone),
            ]);
            Mail::to($request->email)->send(new RegisterMail($request->email, $request->phone));
        }
        
        Auth::login($user);
        $payment_method = '';
        $payment_number = '';
        $payment_trx_id = '';
        if($request->payment_method == 'payment_method--bkash'){
            $payment_method = 'bkash';
            $payment_number = $request->bkash_number;
            $payment_trx_id = $request->bkash_trxID;
        }
        if($request->payment_method == 'payment_method--rocket'){
            $payment_method = 'rocket';
            $payment_number = $request->rocket_number;
            $payment_trx_id = $request->rocket_trxID;
        }
        if($request->payment_method == 'payment_method--nagad'){
            $payment_method = 'nagad';
            $payment_number = $request->nagad_number;
            $payment_trx_id = $request->nagad_trxID;
        }

        Admission::Create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'course_id'         => $request->course_id,
            'course_type'       => $request->course_type, 
            'payment_method'    => $payment_method,
            'payment_number'    => $payment_number,
            'payment_trx_id'    => $payment_trx_id,
        ]);

        Mail::to($request->email)->send(new AdmissionMail());

        return to_route('dashboard');

    }


    // END
}
