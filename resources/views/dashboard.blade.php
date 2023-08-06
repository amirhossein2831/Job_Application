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
@endsection
