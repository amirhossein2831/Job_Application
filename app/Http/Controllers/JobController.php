<?php

namespace App\Http\Controllers;


class JobController extends Controller
{
    public function index()
    {
        return view('user.jobs');
    }
}
