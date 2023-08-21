@extends('layouts.app')
@section('contact')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <img src="https://placehold.co/800" class="card-img-top" alt="Cover Image"
                         style="height: 150px; object-fit: cover;">
                    <div class="card-body">
                        <h2 class="card-title">Job Title</h2>
                        <p>this job provide from  <span class="badge bg-gradient">{{$job->user->company}}</span></p>
                        <p>Job Type: <span class="badge bg-primary">Full-time</span></p>
                        <p>Salary: </p>
                        <p>Address: </p>
                        <h4 class="mt-4">Description</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pretium
                            eleifend erat id finibus. Donec tristique purus vitae urna varius, sed laoreet nisl
                            efficitur.</p>

                        <h4>Roles and Responsibilities</h4>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolorum facere fuga ipsum minima molestiae quidem rerum tempora totam ut!

                        <p class="card-text mt-4">Application closing date: March 31, 2023</p>

                        <a href="#" class="btn btn-primary mt-3">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
