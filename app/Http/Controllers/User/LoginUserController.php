<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function index()
    {
        return view('user.login');
    }
    public function login(LoginRequest $request)
    {
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            if ($user->hasVerifiedEmail()) {
                return redirect('/jobs');
            }
            return redirect()->route('verification.notice');
        }
        return redirect('/login/seeker')->withErrors(['password'=>'the password is wrong']);
    }
}
