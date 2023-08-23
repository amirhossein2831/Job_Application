@extends('layouts.app')

@section('contact')

    <div class="container jobs">
        <div class="row justify-content-center mt-2">
            <div class="col">
                <div class="hero-section" style="background-color:#f5f5f5;width:100%;height:400px;">
                    <img src="{{Storage::url($company->profile_pic)}}"
                         style="width: 100%;object-fit: cover; height:400px;">
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div style="display: inline-flex">
                <img style="width: 50px;height: 50px" src="{{Storage::url($company->profile_pic)}}" alt="Company Logo"
                     class="rounded-circle">
                <h2 style="margin-left: 10px;margin-top: 5px">{{$company->company}}</h2>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h3>About</h3>
                <p>{{$company->about}}</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <h3>List of Jobs</h3>
                @foreach($jobs as $job)
                    <div class="card mb-3 job-card">
                        <div class="card-body">
                            <h5 class="card-title">Title: {{$job->title}}</h5>
                            <p class="card-text">Location: {{$job->address}}</p>
                            <p class="card-text">Salary: ${{$job->salary}} per year</p>
                            <a href="/jobs/{{$job->id}}" class="btn btn-outline-light">View</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
