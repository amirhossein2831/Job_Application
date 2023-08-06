@extends('layouts.app')

@section('contact')

    <div class="container mt-5">
        <div class="row justify-content-center">
           <p> Hello, {{auth()->user()->firstName}}</p>
            @if(Auth::check() && auth()->user()->user_type === "employee")
                <p>Your trial will expire on {{auth()->user()->user_trial}}</p>
            @endif
            <x-items.dashboard-item label="User Profile" class="primary"/>
            <x-items.dashboard-item label="User Profile" class="primary"/>
            <x-items.dashboard-item label="All jobs" class="success"/>
            <x-items.dashboard-item label="Post jobs" class="danger"/>
            <x-items.dashboard-item label="Items" class="info"/>
        </div>
    </div>
    <style>
        .card-counter {
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 130px;
            border-radius: 5px;
            transition: .3s linear all;
        }
        .card-counter.primary {
            background-color: #007bff;
            color: #FFF;
        }
        .card-counter.danger {
            background-color: #ef5350;
            color: #FFF;
        }
        .card-counter.success {
            background-color: #66bb6a;
            color: #FFF;
        }
        .card-counter.info {
            background-color: #26c6da;
            color: #FFF;
        }
    </style>

@endsection
