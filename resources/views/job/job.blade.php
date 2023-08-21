@extends('layouts.app')
@section('contact')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img
                        src="{{\Illuminate\Support\Facades\Storage::url($job->post_image ?? 'image/Default-Profile.png')}}"
                        class="card-img-top" alt="Cover Image"
                        style="height: 200px; object-fit: cover;">
                    <div class="card-body">
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

                        <a href="#" class="btn btn-primary mt-3">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
