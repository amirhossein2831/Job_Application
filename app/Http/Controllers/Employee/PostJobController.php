<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostJobController extends Controller
{
    public function index()
    {
        return view('job.create');
    }
    public function create()
    {
        return "hello";
    }
}
