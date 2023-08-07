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
        return redirect('/login')->with('success', 'Your Registered successfully');
    }
}
