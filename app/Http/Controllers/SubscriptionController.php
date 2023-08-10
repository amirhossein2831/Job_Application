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

    private function updateDB($plan)
    {
        $date = Auth::user()->billing_ends;
        if ($plan === 'weekly') {
            if (!is_null($date)) {
                $date = Carbon::createFromFormat("Y-m-d", $date);
                $date = $date->copy()->addWeek();
            } else
                $date = now()->addWeek();

        } else if ($plan === 'monthly') {
            if (!is_null($date)) {
                $date = Carbon::createFromFormat("Y-m-d", $date);
                $date = $date->copy()->addMonth();
            } else
                $date = now()->addMonth();
        } else if ($plan === 'yearly') {
            if (!is_null($date)) {
                $date = Carbon::createFromFormat("Y-m-d", $date);
                $date = $date->copy()->addYear();
            } else
                $date = now()->addYear();
        }
        User::where('id', Auth::id())->update(
            [
                'plan' => $plan,
                'billing_ends' => $date,
                'status' => 'paid',
            ]
        );
    }
}
