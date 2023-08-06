@extends('layouts.app')
@section('contact')

    <div class="row"
         style="display: flex;justify-content: center;align-items: center;margin-left: -100px;margin-top: 100px">
        <div class="col-md-6">
            <h1>Looking for a job?</h1>
            <h3>register Now</h3>
        </div>
    </div>
    <div class="container"
         style="display: flex;justify-content: center;align-items: center;width: 1000px;height: 450px;margin-top: 20px;border-radius: 10px;border: 1px solid black">
        <form class="row g-3" action="/register/seeker" method="post">
            @csrf
            <input type="hidden" name="user_type" value="seeker">

                <x-field field-name="firstName" type="text" label="First Name" container-class="col-md-6"/>

                <x-field field-name="lastName" type="text" label="Last Name" container-class="col-md-6"/>

                <x-field field-name="password" type="password" label="Password" container-class="col-md-6"/>

                <x-field field-name="confirmPassword" type="password" label="Confirm Password" container-class="col-md-6"/>

                <x-field field-name="email" type="email" label="Email" container-class="mb-3">Amir@gmail.com</x-field>

            <p>you don't have account? &nbsp;<a href="/login">login</a></p>

            <x-button.submit-button container-class="col-12" label="Sign in"/>
        </form>
    </div>
@endsection
