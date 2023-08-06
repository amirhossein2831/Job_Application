@extends('layouts.app')
@section('contact')

    <div style="margin-left: 280px;margin-top: 100px">
        <h1>login</h1>
       <x-successes.success-register />
    </div>
    <div class="container"
    style="display: flex;justify-content: center;align-items: center;width: 1000px;height: 450px;margin-top: 20px;border-radius: 10px;border: 1px solid black">
        <form class="row g-3" action="/login/employee" method="post">
            @csrf
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       id="emailInput" placeholder="Amir@gmail.com">
                <x-errors.field-message name="email"/>
            </div>

            <div class="mb-3">
                <label class="form-label">Password
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           style="width: 480px">
                </label>
                <x-errors.field-message name="password"/>
            </div>
            <p>you don't have account? &nbsp;<a href="/register/employee">register</a></p>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
@endsection
