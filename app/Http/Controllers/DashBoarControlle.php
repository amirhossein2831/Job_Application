<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoarControlle extends Controller
{
    public function index()
    {
        return view("dashboard");  
    }
}
