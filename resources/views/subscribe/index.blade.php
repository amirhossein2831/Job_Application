@extends('layouts.app')

@section('contact')
    <div class="container mt-5">
        <x-successes.success-register />
        <x-warning.warning-message />

        <div class="row">
            <x-subscribe.payment-card src="week.jpg" label="Week" price="$20" link="/pay/weekly"></x-subscribe.payment-card>
            <x-subscribe.payment-card src="month.jpg" label="Mount" price="$75" link="/pay/monthly"></x-subscribe.payment-card>
            <x-subscribe.payment-card src="year.jpg" label="Year" price="$700" link="/pay/yearly"></x-subscribe.payment-card>
        </div>
    </div>

@endsection
