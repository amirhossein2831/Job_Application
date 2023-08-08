@extends('layouts.app')
@section('contact')

    <div id="container" class="wrapper" style="height: auto;width: 500px">
        <div class="form-box login">
            <h2>Login User</h2>
            <form action="/login" method="post">
                @csrf
                <x-field field-name="email" type="email" icon-name="mail" label="Email"></x-field>

                <x-field field-name="password" icon-name="lock-closed" type="password" label="Password" />

                <div class="remember-forget">
                    <label ><input type="checkbox">Remember me</label>
                    <a style="color: aqua" href="/forgetPassword/seeker">ForgetPassword</a>
                </div>
                <div class="login-register">
                    <p>you don't have account? &nbsp;<a href="/register/seeker" class="register-link">Register</a></p>
                </div>

                <button type="submit" id="register-btn" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
@endsection
