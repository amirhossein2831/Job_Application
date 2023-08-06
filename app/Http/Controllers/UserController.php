<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect('/');
    }

    public function login()
    {
        return view('user.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $credential = $request->only('email', 'password');
        if (Auth::attempt($credential)) {
            return redirect()->intended('/dashboard');
        }
    }
}
