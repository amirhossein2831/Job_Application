<?php

namespace App\Http\Controllers;

use App\Models\Post;

class ApplicantController extends Controller
{
    public function index(Post $post)
    {
        $applicants = $post->applicants()->get();
        return view('job.applicants', [
            'applicants' => $applicants
        ]);
    }
}
