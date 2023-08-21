<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile', [
            'user' => Auth::user(),
            'isMe' => true,
        ]);
    }

    public function showUser(User $user)
    {
        return view('profile.profile', [
            'user' => $user,
            'isMe' => false,
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
        $data = $request->except('profile_pic', 'resume');
        if ($request->hasFile('profile_pic')) {
            if (Storage::exists('public/' . $user->profile_pic)) {
                Storage::delete('public/' . $user->profile_pic);
            }
            $proPath = $request->file('profile_pic')->store('image', 'public');
            $profilePath = str_replace('public/', '', $proPath);
            $data['profile_pic'] = $profilePath;
        }
        if ($request->hasFile('resume')) {
            if (Storage::exists('public/' . $user->resume)) {
                Storage::delete('public/' . $user->resume);
            }
            $resPath = $request->file('resume')->store('image', 'public');
            $resumePath = str_replace('public/', '', $resPath);
            $data['resume'] = $resumePath;
        }

        if ($user->update($data)) {
            return redirect('/')->with('success', 'the profile is updated successfully');
        }
        return redirect('/')->with('warning', 'something went wrong.try again');
    }

    public function editPassword()
    {
        return view('profile.changePassword');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        $user = Auth::user();
        if (Hash::check($request->input('old_password'), $user->password)) {
            if ($user->update(['password' => $request->input('new_password')])) {
                return redirect('/')->with('success', 'password change successfully');
            }
        }
        return redirect('profile/changePass')->with('warning', 'the old password in wrong');

    }
}
