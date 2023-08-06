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
            return redirect()->intended('/dashboard');
        }
        return 'wrong input';
    }
}
