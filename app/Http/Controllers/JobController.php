<?php

namespace App\Http\Controllers;


use App\Models\Post;

class JobController extends Controller
{
    public function index()
    {
        $posts = Post::where('close_date','>',now()->format('Y-m-d'));
        return view('user.jobs',[
            'jobs'=>$posts
        ]);
    }
}
