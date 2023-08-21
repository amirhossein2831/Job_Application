@extends('layouts.app')
@section('contact')
    <style>
        .description-container {
            display: -webkit-box;
            -webkit-line-clamp: 2; /* Limit to 2 lines */
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

    <div class="container jobs">
        <div class="d-flex justify-content-between">
            <h4><a href="/jobs" style="color: white;text-decoration: none">Recommended Jobs</a></h4>
            <div class="dropdown">
                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Salary
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?salary=high&{{ http_build_query(request()->except('salary','date')) }}">High to low</a></li>
                    <li><a class="dropdown-item" href="?salary=low&{{ http_build_query(request()->except('salary','date')) }}">Low to high</a></li>
                </ul>

                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Date
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?date=latest&{{ http_build_query(request()->except('date','salary')) }}">Latest</a></li>
                    <li><a class="dropdown-item" href="?date=oldest&{{ http_build_query(request()->except('date','salary')) }}">Oldest</a></li>
                </ul>

                <button class="btn btn-outline-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Job type
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="?jobType=fullTime&{{ http_build_query(request()->except('jobType')) }}">Fulltime</a></li>
                    <li><a class="dropdown-item" href="?jobType=partTime&{{ http_build_query(request()->except('jobType')) }}">Parttime</a></li>
                    <li><a class="dropdown-item" href="?jobType=casual&{{ http_build_query(request()->except('jobType')) }}">Casual</a></li>
                    <li><a class="dropdown-item" href="?jobType=contract&{{ http_build_query(request()->except('jobType')) }}">Contract</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-2 g-1">
            @foreach($jobs as $job)
                <div class="col-md-3">
                    <div class="card p-1 d-flex flex-column h-100 job-card">
                        <div class="text-right"><small class="badge text-bg-info">{{$job->job_type}}</small></div>
                        <div class="text-center mt-2 p-3 h-100">
                            <a href="jobs/{{$job->id}}" style="text-decoration: none">
                                <div style="height: 135px">
                                    <img class="rounded-circle" src="{{\Illuminate\Support\Facades\Storage::url($job->post_image ?? 'image/Default-Profile.png')}}" width="100" height="100" alt="Not loaded"/> <br>
                                    <span class="d-block"
                                          style="font-weight: bold;color: white;font-size: 23px">{{$job->user->company}}</span>
                                    </div>
                                <hr style="margin: 0 0;">
                                <div style="height: 70px">
                                    <span style="color: white;font-weight: bold;font-size: 19px">{{$job->title}}</span><br>
                                    <div class="description-container">
                                        <span style="color: white;font-size: 13px;">{{$job->description}}</span>
                                    </div>
                                </div>
                                <div class="description-container" style="-webkit-line-clamp: 1;text-align: left;margin-top: 7px;margin-left: 10px">
                                    <small class="ml-1" style="color: white">Address: {{$job->address}}</small>
                                </div>
                            </a>
                            <div class="d-flex justify-content-between mt-3"><span style=";color: white;font-size: 20px">${{$job->salary}}</span>
                                <a href="#">
                                    <button class="btn btn-outline-light" >Apply Now</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row mt-2">
            <div class="col-md-12 d-flex justify-content-center">
                @if ($jobs->currentPage() > 1)
                    <a href="{{ $jobs->previousPageUrl()}}" class="btn btn-outline-light">Previous</a>
                @endif
                @if ($jobs->lastPage() > 1)
                    <div class="btn-group" style="margin: 0 5px;">
                        @for ($i = 1; $i <= $jobs->lastPage(); $i++)
                            <a href="{{ $jobs->url($i) }}" class="btn btn-outline-light {{ $i == $jobs->currentPage() ? 'active' : '' }} dark">{{ $i }}</a>
                        @endfor
                    </div>
                @endif
                @if ($jobs->hasMorePages())
                    <a href="{{ $jobs->nextPageUrl() }}" class="btn btn-outline-light">Next</a>
                @endif
            </div>
        </div>
    </div>
@endsection
