@extends('layouts.app')

@section('contact')

<div class="container jobs">
    <div class="row justify-content-center mt-2">
        <div class="col">
            <div class="hero-section" style="background-color:#f5f5f5;width:100%;height:200px;">
                <!-- <img src="" style="width: 100%; height:250px;"> -->
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <img src="" alt="Company Logo" class="img-fluid">
            <h2>Company Name</h2>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium eleifend erat id finibus. Donec tristique purus vitae urna varius, sed laoreet nisl efficitur.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-8">
            <h3>List of Jobs</h3>

            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Job Title 1</h5>
                    <p class="card-text">Location: </p>
                    <p class="card-text">Salary: $5000 per year</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
