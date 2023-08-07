@extends('layouts.app')
@section('contact')

    <div class="container mt-5 s">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center p-4 header">
                <h1 class="mb-4">Login User</h1>
                <h4>Go and find the Job you want</h4>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-md-6  p-4 wrapper">
                <form class="row g-3" action="/login" method="post">
                    @csrf
                    <x-field field-name="email" type="email" label="Email" container-class="mb-3">Amir@gmail.com</x-field>

                    <x-field field-name="password" type="password" label="Password" container-class="mb-6"/>
                    <span>you don't have account? &nbsp;<a href="/register/seeker">register</a></span>

                    <x-button.submit-button container-class="col-12" label="Login"/>
                </form>
            </div>
        </div>
    </div>
@endsection
