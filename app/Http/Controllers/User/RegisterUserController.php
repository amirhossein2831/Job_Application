<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create($request->all());
        $user->sendEmailVerificationNotification();
        Auth::login($user);
        return redirect()->route('verification.notice')->with('success', 'Your Registered successfully,Verify your email to access dashboard');
    }
}
