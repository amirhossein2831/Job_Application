@extends('layouts.app')
@section('contact')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="card-header">Verify Account</div>
            <div class="card-body">
                <p>please verify you account first to access the dashboard</p>
                <a href="/resend/email/verify">resend email</a>
            </div>
        </div>
    </div>
@endsection
