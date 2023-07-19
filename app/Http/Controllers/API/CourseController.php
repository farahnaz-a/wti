<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Course;
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
}
