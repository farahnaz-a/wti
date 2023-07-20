<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return response()->json(['courses' => $courses]);
    }
    public function details($id)
    {
        $course = Course::find($id);
        return response()->json(['course' => $course]);
    }

    public function courseRegister(Request $request){

        $request->validate([
            'name'              => 'required',
            'email'             => 'required|email',
            'phone'             => 'required', 
            'course_id'         => 'required', 
            'course_type'       => 'required', 
        ]);

        $user = User::where('email', $request->email)->first();
        if(!$user){
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => bcrypt($request->phone),
            ]);
            // Mail::to($request->email)->send(new RegisterMail($request->email, $request->phone));
        }

        Admission::Create([
            'name'              => $request->name,
            'email'             => $request->email,
            'phone'             => $request->phone,
            'course_id'         => $request->course_id,
            'course_type'       => $request->course_type == 0 ? 'অফলাইন':'অনলাইন', 
        ]);

        return response()->json(['status' => 'success'], 200);

    }
}
