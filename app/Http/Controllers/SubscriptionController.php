<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscribe.index');
    }
    public function weeklySubscribe(){
        return 'week';
    }
    public function monthlySubscribe(){
        return 'month';
    }
    public function yearlySubscribe(){
        return 'yearly';

    }
}
