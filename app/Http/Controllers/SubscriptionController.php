<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    private const WEEKLY_AMOUNT = 20;
    private const MONTH_AMOUNT = 20;
    private const YEARLY_AMOUNT = 20;

    private const CURRENCY = 'USD';

    private array $plans = [];

    public function index()
    {
        return view('subscribe.index');
    }

    public function weeklySubscribe()
    {
        $this->plans['weekly'] = [
            'name' => 'weekly',
            'description' => 'weekly payment',
            'amount' => self::WEEKLY_AMOUNT,
            'currency' => self::CURRENCY,
            'quantity' => 1,
        ];
        dump($this->plans);
        return 'week';
    }

    public function monthlySubscribe()
    {
        $this->plans['monthly'] = [
            'name' => 'monthly',
            'description' => 'monthly payment',
            'amount' => self::MONTH_AMOUNT,
            'currency' => self::CURRENCY,
            'quantity' => 1,
        ];
        dump($this->plans);

        return 'month';
    }

    public function yearlySubscribe()
    {
        $this->plans['yearly'] = [
            'name' => 'yearly',
            'description' => 'yearly payment',
            'amount' => self::YEARLY_AMOUNT,
            'currency' => self::CURRENCY,
            'quantity' => 1,
        ];
        dump($this->plans);

        return 'yearly';

    }
}
