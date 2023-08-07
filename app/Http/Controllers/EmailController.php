<?php

namespace App\Http\Controllers;

use Auth;

class EmailController
{
    public function sendVerification()
    {
        return view('needVerify')->with('success', 'email verification send successfully');
    }

    public function reSendVerification()
    {
        $user = Auth::user();
        if ($user->hasVerifiedEmail()) {
            return redirect('/dashboard')->with('success', 'your email verified success fully');
        }
        $user->sendEmailVerificationNotification();
        return redirect()->route('verification.notice')->with('success', 'email verification send successfully');
    }
}
