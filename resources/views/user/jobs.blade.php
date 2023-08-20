@extends('layouts.app')
@section('contact')
    <div class="container mt-5 jobs">
        <div class="d-flex justify-content-between">
            <h4>Recommended Jobs</h4>

            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Salary
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">High to low</a></li>
                    <li><a class="dropdown-item" href="#">Low to high</a></li>

                </ul>

                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Date
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Latest</a></li>
                    <li><a class="dropdown-item" href="#">Oldest</a></li>
                </ul>

                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    Job type
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Fulltime</a></li>
                    <li><a class="dropdown-item" href="#">Parttime</a></li>
                    <li><a class="dropdown-item" href="#">Casual</a></li>
                    <li><a class="dropdown-item" href="#">Contract</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-2 g-1">
            <div class="col-md-3">
                <div class="card p-2">
                    <div class="text-right"><small class="badge text-bg-info">Fulltime</small></div>
                    <div class="text-center mt-2 p-3"><img class="rounded-circle" src="#" width="100"/> <br>
                        <span class="d-bl>ock font-weight-bold">Software engineer</span>
                        <hr>
                        <span>Amazon</span>
                        <div class="d-flex flex-row align-items-center justify-content-center">
                            <small class="ml-1">Melbourne</small>
                        </div>
                        <div class="d-flex justify-content-between mt-3"><span>$100000</span>
                            <a href="#">
                                <button class="btn btn-dark">Apply Now</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
