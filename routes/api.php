<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CourseController;
use App\Http\Controllers\API\FaqController;
use App\Http\Controllers\API\GeneralSettingController;
use App\Http\Controllers\API\SeminarController;
use App\Http\Controllers\API\YoutubeVideoCategoryController;
use App\Http\Controllers\API\YoutubeVideoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('courses', [CourseController::class, 'index']);
Route::get('course/{id}/details', [CourseController::class, 'details']);
Route::post('course-register', [CourseController::class, 'courseRegister']);
Route::get('seminars', [SeminarController::class, 'index']);
Route::get('settings', [GeneralSettingController::class, 'index']);
Route::get('banner', [GeneralSettingController::class, 'banner']);
Route::get('youtube-video-category', [YoutubeVideoCategoryController::class, 'index']);
Route::get('youtube-video', [YoutubeVideoController::class, 'index']);
Route::get('faq', [FaqController::class, 'index']);
Route::post('contact-store', [GeneralSettingController::class, 'contactStore']);