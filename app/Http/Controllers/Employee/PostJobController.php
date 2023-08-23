<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\employee\PostJobRequest;
use App\Http\Requests\employee\UpdateJobRequest;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostJobController extends Controller
{
    public function index()
    {
        return view('job.create');
    }

    public function show()
    {
        $jobs = Auth::user()->posts()->get();
        return view('job.allJob', [
            'jobs' => $jobs,
        ]);
    }

    public function store(PostJobRequest $request)
    {
        $path = $request->file('post_image')->store('image', 'public'); // Store the image in the 'public' disk under the 'image' directory
        $relativePath = str_replace('public/', '', $path);
        $data = $request->except('post_image');
        $data['post_image'] = $relativePath;

        if (Post::create($data)) {
            return redirect('/job')->with('success', 'Post created successfully');
        }
        return redirect('/job')->with('warning', 'somethings went wrong,try again');
    }

    public function edit(Post $post)
    {
        return view('job.edit', ['post' => $post]);
    }

    public function update(Post $post, UpdateJobRequest $request)
    {
        if ($request->hasFile('post_image')) {
            if (Storage::exists('public/' . $post->post_image)) {
                Storage::delete('public/' . $post->post_image);
            }
            $path = $request->file('post_image')->store('image', 'public');
            $relativePath = str_replace('public/', '', $path);
            $data = $request->except('post_image');
            $data['post_image'] = $relativePath;
        } else {
            $data = $request->except('post_image');
        }
        if ($post->update($data)) {
            return redirect('/job')->with('success', 'the job is updated successfully');
        }
        return redirect('/job')->with('warning', 'something went wrong.try again');
    }

    public function delete(Request $request)
    {
            $post = Post::find($request->input('delete'));
            if ($post->delete()) {
                if (Storage::exists('public/' . $post->post_image)) {
                    Storage::delete('public/' . $post->post_image);
                }
                return back()->with('success', 'the job is removed successfully');
            }
        return back()->with('warning', 'something went wrong.try again');
    }
}
