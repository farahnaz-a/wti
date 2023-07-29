<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\YoutubeVideo;
use Illuminate\Http\Request;

class YoutubeVideoController extends Controller
{
    public function index(){
        $videos = YoutubeVideo::all();
        return response()->json(['videos' => $videos]);
    }
}
