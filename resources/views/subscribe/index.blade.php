@extends('layouts.app')

@section('contact')
    <div class="container mt-5">
        <div class="row">
            <x-subscribe.payment-card src="week.jpg" label="Week" price="$20" link=""></x-subscribe.payment-card>
            <x-subscribe.payment-card src="month.jpg" label="Mount" price="$75" link=""></x-subscribe.payment-card>
            <x-subscribe.payment-card src="year.jpg" label="Year" price="$700" link=""></x-subscribe.payment-card>
        </div>
    </div>

@endsection
