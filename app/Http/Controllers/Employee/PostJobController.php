<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\employee\PostJobRequest;
use App\Models\Post;

class PostJobController extends Controller
{
    public function index()
    {
        return view('job.create');
    }
    public function store(PostJobRequest $request)
    {
        $path = $request->file('post_image')->store('image', 'public'); // Store the image in the 'public' disk under the 'image' directory
        $relativePath = str_replace('public/', '', $path);
        $data = $request->except('post_image');
        $data['post_image'] = $relativePath;

        if (Post::create($data)) {
            return redirect('/dashboard')->with('success', 'Post created successfully');
        }
        return redirect('/dashboard')->with('warning','somethings went wrong,try again');
    }
}
