<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $jobType = $request->query('jobType');
        if ($jobType) {
            $posts = Post::where('job_type', $jobType)->where('close_date', '>', now()->format('Y-m-d'));
        }
        else  $posts = Post::where('close_date', '>', now()->format('Y-m-d'));

        $posts = $posts->with('user')->paginate(8)->appends($request->query());

        return view('user.jobs',[
            'jobs'=>$posts
        ]);
    }
}
