<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class JobController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
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

    /**
     * @param $job
     * @return Application|Factory|View
     */
    public function show($job)
    {
        $job = Post::with('user')->where('id', $job)->first();
        return view('job.job', [
            'job' => $job
        ]);
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function apply(Request $request)
    {
        $post = Post::find($request->input('post'));
        if (!$post->applicants->find($request->input('user'))) {
            $user = User::find($request->input('user'));
            $post->applicants()->attach($user);
            return redirect('/')->with('success', 'You applying for the jub successfully');
        }
        return redirect('/')->with('warning', 'You already applied for this jub');
    }
}
