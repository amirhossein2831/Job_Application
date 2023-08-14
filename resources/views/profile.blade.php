@extends('layouts.app')

@section('contact')
    <section class="home">
        <div class="home-content">
            <h1>Hi,I'm {{$user->firstName.' '.$user->lastName}}</h1>
            <h3>Resume: web developer</h3>
            <p class="about">About: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorem dolores error
                exercitationem expedita maiores, molestias nisi, nulla obcaecati officia optio possimus quibusdam
                quisquam quo repellat, sequi similique velit veniam?</p>
            <p>Email: {{$user->email}}</p>
            <p>Account Type: {{$user->user_type}}</p>
            @if($user->user_type === 'employee')
                <p>Company: {{$user->company}}</p>
                <p>Trial End: {{$user->billing_ends}}</p>
                <p>Premium End: {{$user->billing_ends}}</p>
            @endif
            <a href="" class="btn-hire">Hire Me</a>
        </div>
        <div class="home-image">
            <div class="glowing-circle">
                <span></span>
                <span></span>
                <div class="image">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($user->profile_pic ?? 'image/Default-Profile.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
