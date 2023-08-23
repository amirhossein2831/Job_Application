<?php

namespace App\Http\Controllers;


use App\Mail\ApplyMail;
use App\Models\Post;
use App\Models\User;
use Auth;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse as RedirectResponseAlias;
use Illuminate\Http\Request;
use Mail;

class JobController extends Controller
{
    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $posts = Post::where('close_date', '>', now()->format('Y-m-d'));

        return $this->filterJobs($request, $posts);
    }

    public function appliedJobs(Request $request)
    {
        $posts = Auth::user()->jobs();

        return $this->filterJobs($request, $posts);
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

    public function jobsOfCompany(User $company)
    {
        $posts = $company->posts()->get();
        return view('employee.company-profile', [
            'company'=>$company ,
            'jobs'=>$posts
            ]
        );
    }

    /**
     * @param Request $request
     * @return RedirectResponseAlias
     */
    public function apply(Request $request)
    {
        $post = Post::with('user')->find($request->input('post'));
        if (!$post->applicants->find(Auth::id())) {
            $user = User::find(Auth::id());
            $post->applicants()->attach($user);
            Mail::to($post->user->email)->queue(new ApplyMail(Auth::user()->firstName . ' ' . Auth::user()->lastName, $post->title, now()->format("Y-m-d H:i:s")));
            return back()->with('success', 'You applying for the jub successfully');
        }
        return back()->with('warning', 'You already applied for this jub');
    }

    /**
     * @param Request $request
     * @param $posts
     * @return Application|Factory|View
     */
    public function filterJobs(Request $request,$posts): Application|Factory|View
    {
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

}
