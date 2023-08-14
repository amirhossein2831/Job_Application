<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile', [
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('profile.update', [
            'user' => Auth::user()
        ]);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        if ($request->hasFile('profile_pic')) {
            if (Storage::exists('public/' . $user->profile_pic)) {
                Storage::delete('public/' . $user->profile_pic);
            }
            $path = $request->file('profile_pic')->store('image', 'public');
            $relativePath = str_replace('public/', '', $path);
            $data = $request->except('profile_pic');
            $data['profile_pic'] = $relativePath;
        } else {
            $data = $request->except('profile_pic');
        }
        if ($user->update($data)) {
            return redirect('/')->with('success', 'the profile is updated successfully');
        }
        return redirect('/')->with('warning', 'something went wrong.try again');
    }

    public function editPassword()
    {

    }

    public function updatePassword()
    {
        
    }
}
