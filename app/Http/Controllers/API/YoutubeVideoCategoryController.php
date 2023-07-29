<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\YoutubeVideoCategory;
use Illuminate\Http\Request;

class YoutubeVideoCategoryController extends Controller
{
    public function index(){
        $categories = YoutubeVideoCategory::get()->map(function($category){
            return [
                'id'    => $category->id,
                'name'  => $category->name,
                'image' => asset('uploads/youtube_video_category').'/'.$category->image,
            ];
        });

        return response()->json(['seminars' => $categories]);
    }
}
