<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\DashBoarController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Employee\LoginEmployeeController;
use App\Http\Controllers\Employee\PostJobController;
use App\Http\Controllers\Employee\RegisterEmployeeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Middleware\IsYourPost;
use App\Rules\IsEmployee;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use PharIo\Manifest\Application;

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
//login group
Route::group(['prefix' => 'login','middleware' => 'notLoggedIn'], function () {
    Route::get('/seeker', [LoginUserController::class, 'index'])->name('login');
    Route::post('/seeker', [LoginUserController::class, 'login']);
    Route::get('/employee',[LoginEmployeeController::class,'index']);
    Route::post('/employee',[LoginEmployeeController::class,'login']);
});
//register group
Route::group(['prefix' => 'register','middleware' => 'notLoggedIn'], function () {
    Route::get('/seeker', [RegisterUserController::class, 'index']);
    Route::post('/seeker', [RegisterUserController::class, 'store']);
    Route::get('/employee',[RegisterEmployeeController::class,'index']);
    Route::post('/employee',[RegisterEmployeeController::class,'store']);
});
//pay group
Route:: group(['prefix' => 'pay', 'middleware' => ['auth','verified','employee','isPurchased']], function () {
    Route::get('subscription', [SubscriptionController::class, 'index'])->withoutMiddleware('isPurchased');
    Route::get('weekly',[SubscriptionController::class,'weeklySubscribe']);
    Route::get('monthly',[SubscriptionController::class,'monthlySubscribe']);
    Route::get('yearly',[SubscriptionController::class,'yearlySubscribe']);
});
//job group
Route::group(['prefix' => 'job','middleware' => ['auth','verified','isPremium']], function () {
    Route::get('/',[PostJobController::class,'show']);
    Route::get('/create',[PostJobController::class,'index']);
    Route::post('/create',[PostJobController::class,'store']);
    Route::get('/edit/{post}',[PostJobController::class,'edit'])->middleware(IsYourPost::class);
    Route::put('/edit/{post}',[PostJobController::class,'update'])->middleware(IsYourPost::class);
    Route::delete('/delete',[PostJobController::class,'delete'])->middleware(IsYourPost::class);
    Route::get('/applicants/{post}', [ApplicantController::class,'index'])->middleware(IsYourPost::class);
    Route::delete('/applicants/delete', [ApplicantController::class,'deleteUser'])->middleware(IsYourPost::class);
    Route::get('/applicants/shortlist/{post}/{userId}', [ApplicantController::class,'shortlist'])->middleware(IsYourPost::class);
    Route::get('/applicants/resume/image/{resume}',[ProfileController::class,'downloadResume']);
    Route::post('/apply', [JobController::class, 'apply'])->withoutMiddleware('isPremium');
});
//profile group
Route::group(['prefix' => 'profile','middleware' => ['auth','verified']], function () {
    Route::get('/',[ProfileController::class,'index']);
    Route::get('/update', [ProfileController::class,'edit']);
    Route::patch('/update', [ProfileController::class,'update']);
    Route::get('/changePass', [ProfileController::class,'editPassword']);
    Route::patch('/changePass', [ProfileController::class,'updatePassword']);
    Route::get('/user/{user}', [ProfileController::class, 'showUser']);
});

Route::get('/', function () {return view('home');});
Route::get('/home', function () {return view('home');});
Route::get('/about', function () {return view('about');})->middleware('auth','verified');
Route::post('/logout',[LogoutController::class,'logout'])->middleware('auth');
Route::get('/dashboard',[DashBoarController::class,'index'])->middleware('verified','auth','employee');
Route::get('/jobs', [JobController::class,'index'])->middleware('auth','verified','isSeeker');
Route::get('/jobs/applied', [JobController::class,'appliedJobs'])->middleware('auth','verified','isSeeker');
Route::get('/jobsFrom/{company}', [JobController::class, 'jobsOfCompany'])->middleware('auth', 'verified','isSeeker');
Route::get('/jobs/{job}',[JobController::class,'show'])->middleware('auth','verified','isSeeker');
Route::get('/email/verify',[EmailController::class,'sendVerification'])->middleware('auth')->name('verification.notice');
Route::get('/resend/email/verify',[EmailController::class,'reSendVerification'])->middleware('auth');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard')->with('your email verify successfully find your job');
})->middleware(['auth', 'signed'])->name('verification.verify');
