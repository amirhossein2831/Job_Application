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
            <form class="row g-3" action="/register/seeker" method="post">
                @csrf
                <input type="hidden" name="user_type" value="seeker">

                <x-field field-name="firstName" type="text" label="First Name" container-class="col-md-6"/>

                <x-field field-name="lastName" type="text" label="Last Name" container-class="col-md-6"/>

                <x-field field-name="password" type="password" label="Password" container-class="col-md-6"/>

                <x-field field-name="confirmPassword" type="password" label="Confirm Password" container-class="col-md-6"/>

                <x-field field-name="email" type="email" label="Email" container-class="mb-3">Amir@gmail.com</x-field>

                <div class="col-12"><p>Don't have an account? <a href="/login">Login</a></p></div>

                <x-button.submit-button container-class="col-12" label="Sign in"/>

            </form>
        </div>
    </div>
</div>
<script src="{{asset("resources/js/SendingButton.js")}}"></script>
@endsection
