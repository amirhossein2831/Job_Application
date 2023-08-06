<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
