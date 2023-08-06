<?php

use App\Http\Controllers\DashBoarController;
use App\Http\Controllers\Employee\LoginEmployeeController;
use App\Http\Controllers\Employee\RegisterEmployeeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\RegisterUserController;
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
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/register/seeker', [RegisterUserController::class, 'index']);
Route::post('/register/seeker', [RegisterUserController::class, 'store']);
Route::get('/dashboard',[DashBoarController::class,'index'])->middleware('auth');
Route::get('/login', [LoginUserController::class, 'index'])->name('login');
Route::post('/login', [LoginUserController::class, 'login']);
Route::post('/logout',[LogoutController::class,'logout']);
Route::get('/login/employee',[LoginEmployeeController::class,'index']);
Route::post('/login/employee',[LoginEmployeeController::class,'login']);
Route::get('/register/employee',[RegisterEmployeeController::class,'index']);
Route::post('/register/employee',[RegisterEmployeeController::class,'store']);
