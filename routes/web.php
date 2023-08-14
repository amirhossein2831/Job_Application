<?php

use App\Http\Controllers\DashBoarController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Employee\LoginEmployeeController;
use App\Http\Controllers\Employee\PostJobController;
use App\Http\Controllers\Employee\RegisterEmployeeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Middleware\IsYourPost;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
//login group
Route::group(['prefix' => 'login','middleware' => 'loggedIn'], function () {
    Route::get('/seeker', [LoginUserController::class, 'index'])->name('login');
    Route::post('/seeker', [LoginUserController::class, 'login']);
    Route::get('/employee',[LoginEmployeeController::class,'index']);
    Route::post('/employee',[LoginEmployeeController::class,'login']);
});
//register group
Route::group(['prefix' => 'register','middleware' => 'loggedIn'], function () {
    Route::get('/seeker', [RegisterUserController::class, 'index']);
    Route::post('/seeker', [RegisterUserController::class, 'store']);
    Route::get('/employee',[RegisterEmployeeController::class,'index']);
    Route::post('/employee',[RegisterEmployeeController::class,'store']);
});
//pay group
Route::group(['prefix' => 'pay', 'middleware' => ['auth','employee']], function () {
    Route::get('subscription', [SubscriptionController::class, 'index']);
    Route::get('weekly',[SubscriptionController::class,'weeklySubscribe'])->middleware('isPurchased');
    Route::get('monthly',[SubscriptionController::class,'monthlySubscribe'])->middleware('isPurchased');
    Route::get('yearly',[SubscriptionController::class,'yearlySubscribe'])->middleware('isPurchased');
});
//job group
Route::group(['prefix' => 'job'], function () {
    Route::get('/',[PostJobController::class,'show'])->middleware('isPremium');
    Route::get('/create',[PostJobController::class,'index'])->middleware('isPremium');
    Route::post('/create',[PostJobController::class,'store'])->middleware('isPremium');
    Route::get('/edit/{post}',[PostJobController::class,'edit'])->middleware('isPremium',IsYourPost::class);
    Route::put('/edit/{post}',[PostJobController::class,'update'])->middleware('isPremium',IsYourPost::class);
    Route::delete('/delete',[PostJobController::class,'delete'])->middleware('isPremium',IsYourPost::class);
});
Route::post('/logout',[LogoutController::class,'logout']);

Route::get('/dashboard',[DashBoarController::class,'index'])->middleware('verified','auth');
Route::get('/', function () {return view('layouts.app');});

Route::get('/email/verify',[EmailController::class,'sendVerification'])
             ->middleware('auth')->name('verification.notice');

Route::get('/resend/email/verify',[EmailController::class,'reSendVerification'])
    ->middleware('auth');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/dashboard')->with('your email verify successfully find your job');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/profile', [ProfileController::class,'index'])->middleware('auth');
Route::get('/profile/update', [ProfileController::class,'edit'])->middleware('auth');
Route::patch('/profile/update', [ProfileController::class,'update'])->middleware('auth');

