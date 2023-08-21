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
        if ($jobType) {
            $posts->where('job_type', $jobType);
        }

        if ($date === 'latest') {
            $posts->orderBy('created_at', 'desc');
        } elseif ($date === 'oldest') {
            $posts->orderBy('created_at', 'asc');
        }

        if ($salary === 'high') {
            $posts->orderBy('salary', 'desc');
        } elseif ($salary === 'low') {
            $posts->orderBy('salary', 'asc');
        }

        $posts = $posts->with('user')->paginate(8)->appends($request->query());

        return view('user.jobs', [
            'jobs' => $posts,
        ]);
    }
}
