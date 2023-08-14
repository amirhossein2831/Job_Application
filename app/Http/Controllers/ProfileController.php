<?php

namespace App\Http\Controllers;

use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile', [
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('profile.update', [
            'user' => Auth::user()
        ]);
    }

    public function update()
    {

    }
}
