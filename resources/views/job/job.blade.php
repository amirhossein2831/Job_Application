@extends('layouts.app')
@section('contact')
    <div class="container jobs" style="padding: 20px 20px;width: 1000px">
        <x-successes.success-register/>
        <div class="job-card" >
            <img
                src="{{\Illuminate\Support\Facades\Storage::url($job->post_image ?? 'image/Default-Profile.png')}}"
                class="card-img-top" alt="Cover Image"
                style="height: 220px; border-top-left-radius: 20px;border-top-right-radius: 20px;object-fit: cover;">

            <div class="card-body" style="border-radius: 20px;padding: 15px 25px">
                <h2 class="card-title">{{$job->title}}</h2>
                <p>this job provide from <span class="badge bg-gradient">{{$job->user->company}}</span></p>
                <h4>Info</h4>
                    <p>Job Type: <span class="badge bg-primary">{{$job->job_type}}</span></p>
                <p>Salary: ${{$job->salary}} </p>
                <p>Address: {{$job->address}} </p>
                <h4 class="mt-4">Description</h4>
                <p class="card-text">{{$job->description}}</p>

                <h4>Roles and Responsibilities</h4>
                {{$job->roles}}
                <p class="card-text mt-4">Application closing date: {{$job->close_date}}</p>
                @if($job->applicants()->find(Auth::id()))
                    <button style="padding: 10px;background: rgb(255,255,255,.2);border-radius: 10px;border-color: black" >Applied</button>
                @else
                    <form action="/job/apply" method="post">
                        @csrf
                        <input type="hidden" name="post" value="{{$job->id}}">
                        <button type="submit" class="btn btn-outline-light" >Apply Now</button>
                    </form>
                @endif
            </div>
        </div>
    </div>

@endsection
