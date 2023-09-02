@extends('layouts.app')

@section('contact')
    <style>
        body {
            justify-content: flex-start;
        }
    </style>
    <section class="home">
        <div class="home-content">
            <x-successes.success-register/>
            <x-warning.warning-message/>
            <h1>Hi,I'm {{$user->firstName.' '.$user->lastName}}</h1>
            <p class="about">About: {{$user->about}}</p>
            <p>Email: {{$user->email}}</p>
            @if($user->user_type === 'seeker')
               <p>Resume: @if($user->resume) Uploaded @else Not Uploaded @endif</p>
            @endif
            @if($isMe)
                <p>Account Type: {{$user->user_type}}</p>
            @endif
            @if($user->user_type === 'employee')
                <p>Company: {{$user->company}}</p>
                <p>Trial End: {{$user->billing_ends}}</p>
                <p>Premium End: {{$user->billing_ends}}</p>
            @endif
            @if($isMe)
                <a href="/profile/update" class="btn-hire">Edit Profile</a>
                <a style="margin-left: 5px" href="/profile/changePass" class="btn-hire">Change Pass</a>
            @else
                <a style="margin-left: 5px" href="mailto:{{$user->email}}" class="btn-hire">Send Email</a>
                @if($user->resume)
                    <a style="margin-left: 5px;width: 220px" href="/job/applicants/resume/{{$user->resume}}" class="btn-hire">Download Resume</a>
                @endif
            @endif
        </div>
        <div class="home-image">
            <div class="glowing-circle">
                <span></span>
                <span></span>
                <div class="image">
                    <img src="{{\Illuminate\Support\Facades\Storage::url($user->profile_pic ?? 'image/Default-Profile.png')}}" style="width: 400px" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection
