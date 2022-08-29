<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    // home page 
    public function index(){
        return view('frontend.index');
    }

    // contact page
    public function contact(){
        return view('frontend.contact');
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

}
