<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::where('close_date', '>', now()->format('Y-m-d'));

        $jobType = $request->query('jobType');
        $date = $request->query('date');
        $salary = $request->query('salary');

        $posts = $jobType ? $posts->where('job_type', $jobType) : $posts;

        $posts = $date === 'latest' ? $posts->orderBy('created_at', 'desc') : ($date === 'oldest' ? $posts->orderBy('created_at') : $posts);

        $posts = $salary === 'high' ? $posts->orderBy('salary', 'desc') : ($salary === 'low' ? $posts->orderBy('salary') : $posts);

        $posts = $posts->with('user')->paginate(8)->appends($request->query());

        return view('user.jobs', [
            'jobs' => $posts,
        ]);
    }

    public function show(Post $job)
    {
        dd($job->id);

    }
}
