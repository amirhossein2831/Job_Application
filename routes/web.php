<?php

use App\Http\Controllers\DashBoarController;
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
Route::get('/register/seeker', [RegisterUserController::class, 'index']);
Route::post('/register/seeker', [RegisterUserController::class, 'store']);
Route::get('/dashboard',[DashBoarController::class,'index']);
Route::get('/login', [LoginUserController::class, 'index']);
Route::post('/login', [LoginUserController::class, 'login']);
