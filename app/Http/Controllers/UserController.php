<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }

    public function store(UserRequest $request)
    {
        return User::create($request->all());
    }
}
