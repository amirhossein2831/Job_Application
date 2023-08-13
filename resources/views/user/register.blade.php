@extends('layouts.app')
@section('contact')

    <div id="container" class="wrapper" style="height: auto;width: 500px">
        <div class="form-box login">
            <h2>Register User</h2>
            <form action="/register/seeker" method="post">
                @csrf
                <input type="hidden" name="user_type" value="seeker">

                <x-field field-name="firstName" type="text" label="First Name" icon-name="person" value="{{old('firstName')}}"/>

                <x-field field-name="lastName" type="text" label="Last Name" icon-name="person" value="{{old('lastName')}}"/>

                <x-field field-name="password" type="password" label="Password" icon-name="lock-closed" value="{{old('password')}}"/>

                <x-field field-name="confirmPassword" type="password" label="Confirm Password" icon-name="lock-closed" value="{{old('confirmPassword')}}"/>

                <x-field field-name="email" type="email" icon-name="mail" label="Email" value="{{old('email')}}"/>

                    <div class="login-register">
                        <p>already have account? &nbsp;<a href="/login/seeker" class="register-link">Login</a></p>
                    </div>
                <button type="submit" id="register-btn" class="button">Sign Up</button>
              </form>
        </div>
    </div>
    <script src="{{asset("resources/js/SendingButton.js")}}"></script>
@endsection
