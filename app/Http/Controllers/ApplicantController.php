<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(Post $post)
    {
        $applicants = $post->applicants()->get();
        return view('job.applicants', [
            'post' => $post,
            'applicants' => $applicants
        ]);
    }

    public function deleteUser(Request $request)
    {
        $post = Post::find($request->input('delete'));
        $user = User::find($request->input('user'));
        $post->applicants()->detach($user);
        return redirect('/dashboard')->with('success', 'applicant delete successfully');
    }

    public function shortlist(Post $post,$userId){
        $post->applicants()->updateExistingPivot($userId, ['shortlisted' => true]);
        return back()->with('success', 'the applicant add to shortlisted successfully');
    }
    public function unShortlist(Post $post,$userId){
        $post->applicants()->updateExistingPivot($userId, ['shortlisted' => false]);
        return back()->with('success', 'the applicant remove from shortlisted successfully');
    }
}
