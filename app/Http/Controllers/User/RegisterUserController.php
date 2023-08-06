<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

class RegisterUserController extends Controller
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
}
