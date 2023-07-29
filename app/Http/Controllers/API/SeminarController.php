<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Seminar;
use Illuminate\Http\Request;

class SeminarController extends Controller
{
    public function index(){
        $seminars = Seminar::orderBy('id', 'asc')->get()->map(function($seminar){
            return [
                'image' => asset('uploads/seminars').'/'.$seminar->image,
            ];
        });

        return response()->json(['seminars' => $seminars]);
    }
}
