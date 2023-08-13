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
        return Post::create($request->all())->with('success','post created successfully');
    }
}
