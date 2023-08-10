<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseMail;
use App\Models\User;
use Auth;
use Exception;
use Mail;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscribe.index');
    }

    public function weeklySubscribe()
    {
        $this->updateDB('weekly');
        try {
            Mail::to(Auth::user())->queue(new PurchaseMail(['name' => 'weekly', 'amount' => '20$', 'billingEnds' => Auth::user()->billing_ends]));
        } catch (Exception $exception) {
            return response()->json($exception);
        }
        return redirect('/')->with('success', 'your account charge successfully for one week');

    }

    public function monthlySubscribe()
    {
        $this->updateDB('monthly');
        try {
            Mail::to(Auth::user())->queue(new PurchaseMail(['name'=>'monthly','amount'=>'75$','billingEnds'=>Auth::user()->billing_ends]));
        } catch (Exception $exception) {
            return response()->json($exception);
        }
        return redirect('/')->with('success', 'your account charge successfully for one mount');

    }

    public function yearlySubscribe()
    {
        $this->updateDB('yearly');
        try {
            Mail::to(Auth::user())->queue(new PurchaseMail(['name'=>'yearly','amount'=>'700$','billingEnds'=>Auth::user()->billing_ends]));
        } catch (Exception $exception) {
            return response()->json($exception);
        }
        return redirect('/')->with('success', 'your account charge successfully for one year');
    }

    private function updateDB($plan)
    {
        $date = Auth::user()->billing_ends;
        if ($plan === 'weekly') {
            $date = now()->addWeek();
        } else if ($plan === 'monthly') {
            $date = now()->addMonth();
        } else if ($plan === 'yearly') {
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
