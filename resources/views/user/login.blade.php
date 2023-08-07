@extends('layouts.app')
@section('contact')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h1 class="mb-4">Looking for a job?</h1>
                <h3>Register Now</h3>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6 border rounded p-4">
                <form class="row g-3" action="/login" method="post">
                    @csrf
                    <x-field field-name="email" type="email" label="Email" container-class="mb-3">Amir@gmail.com</x-field>

                    <x-field field-name="password" type="password" label="Password" container-class="col-md-6"/>
                    <p>you don't have account? &nbsp;<a href="/register/seeker">register</a></p>

                    <x-button.submit-button container-class="col-12" label="Login"/>
                </form>
            </div>
        </div>
    </div>
@endsection
