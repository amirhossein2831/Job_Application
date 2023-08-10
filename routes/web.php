<?php

use App\Http\Controllers\DashBoarController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\Employee\LoginEmployeeController;
use App\Http\Controllers\Employee\RegisterEmployeeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
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
Route::get('/register/seeker', [RegisterUserController::class, 'index']);
Route::post('/register/seeker', [RegisterUserController::class, 'store']);
Route::get('/login', [LoginUserController::class, 'index'])->name('login');
Route::post('/login', [LoginUserController::class, 'login']);
Route::post('/logout',[LogoutController::class,'logout']);
Route::get('/login/employee',[LoginEmployeeController::class,'index']);
Route::post('/login/employee',[LoginEmployeeController::class,'login']);
Route::get('/register/employee',[RegisterEmployeeController::class,'index']);
Route::post('/register/employee',[RegisterEmployeeController::class,'store']);
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
Route::group(['prefix' => 'pay', 'middleware' => ['auth','employee']], function () {
    Route::get('subscription', [SubscriptionController::class, 'index']);
    Route::get('weekly',[SubscriptionController::class,'weeklySubscribe']);
    Route::get('monthly',[SubscriptionController::class,'monthlySubscribe']);
    Route::get('yearly',[SubscriptionController::class,'yearlySubscribe']);
    Route::get('success',[SubscriptionController::class,'successPay'])->name('successPay');
    Route::get('failed',[SubscriptionController::class,'failedPay'])->name('failedPay');
});
