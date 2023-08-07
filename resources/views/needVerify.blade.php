@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white">Verify Account</div>
                    <div class="card-body">
                        <p class="lead">Please verify your account to access the dashboard.</p>
                        <a href="/resend/email/verify" class="btn btn-primary">Resend Email</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
