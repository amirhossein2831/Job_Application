<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\employee\RegisterRequest;
use App\Models\User;
use Auth;

class RegisterEmployeeController extends Controller
{
    public function index()
    {
        return view('employee.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create($request->all());
        $user->sendEmailVerificationNotification();
        Auth::login($user);
        return redirect()->route('verification.notice')->with('success', 'You Registered successFully,Verify your email to access dashboard');
    }
}
