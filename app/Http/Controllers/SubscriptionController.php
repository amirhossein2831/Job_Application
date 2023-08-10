<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscribe.index');
    }

    public function weeklySubscribe()
    {
        $this->updateDB('weekly');
        return redirect('/')->with('success', 'your account charge successfully for one week');

    }

    public function monthlySubscribe()
    {
        $this->updateDB('monthly');
        return redirect('/')->with('success', 'your account charge successfully for one mount');

    }

    public function yearlySubscribe()
    {
        $this->updateDB('yearly');
        return redirect('/')->with('success', 'your account charge successfully for one year');
    }
    
}
