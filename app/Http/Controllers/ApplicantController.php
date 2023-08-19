<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index()
    {
        $posts = Auth::user()->posts()->get();
        dd($posts);
    }
}
