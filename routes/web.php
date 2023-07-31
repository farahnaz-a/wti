<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/') ;
    })->name('dashboard');
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/contact', 'contact')->name('home.contact');  
    Route::post('/contact/store', 'contactStore')->name('home.contact.store');
    Route::post('/newsletter/store', 'newsletterStore')->name('home.newsletter.store');
    Route::post('/email/check', 'emailCheck')->name('email.check');
    Route::post('/register', 'register')->name('home.register');  
    Route::get('/admission', 'adminssion')->name('home.admission');
    Route::post('admission/store', 'admissionStore')->name('home.admission.store');
    Route::get('/all-course', 'allCourse')->name('home.course');
    Route::get('/course/details/{slug}', 'courseDetails')->name('home.course.details');
    Route::get('/dashboard', 'dashboard')->name('home.dashboard')->middleware('auth');
    Route::post('/dashboard/update', 'infoUdate')->name('home.info.update')->middleware('auth');
    Route::post('/dashboard/password/update', 'passwordUdate')->name('home.password.update')->middleware('auth');
    Route::get('privacy-policy', 'privacyPolicy')->name('privacy.policy');
});


Route::controller(AdminController::class)->middleware('auth')->prefix('admin')->group(function () {
    Route::get('/subscriber/list', 'subscriberList')->name('admin.subscriber');
    Route::post('subscriber/status/change', 'subscriberStatusChange')->name('subscriber.status.change');
    Route::post('subscriber/destroy', 'subscriberDestroy')->name('subscriber.destroy');
    Route::post('subscriber/mail/send', 'subscriberMailSend')->name('admin.subscriber.mail.send');
    Route::get('/user/list', 'userList')->name('admin.user');
    Route::post('user/staus/change', 'userStausChange')->name('user.staus.change');
    Route::get('/student/list', 'studentList')->name('admin.student');
    Route::post('student/approve', 'studentApprove')->name('admin.student.approve');
    Route::post('student/reject', 'studentReject')->name('admin.student.reject');
    Route::post('student/pending', 'studentPending')->name('admin.student.pending');

});