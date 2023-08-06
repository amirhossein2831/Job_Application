<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoarController extends Controller
{
    public function index()
    {
        return view("dashboard");
    }
}
