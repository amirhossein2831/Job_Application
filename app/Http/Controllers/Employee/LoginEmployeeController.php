<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\employee\LoginRequest;
use Auth;

class LoginEmployeeController extends Controller
{
    public function index()
    {
        return view('employee.login');

    }

    public function login(LoginRequest $request)
    {
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            $user = Auth::user();
            if ($user->hasVerifiedEmail()) {
                return redirect()->intended('/dashboard');
            }
            return redirect()->route('verification.notice');
        }

        return redirect('/login/employee')->withErrors(['password'=>'the password is wrong']);
    }
}
