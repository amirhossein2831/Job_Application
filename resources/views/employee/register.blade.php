@extends('layouts.app')
@section('contact')

    <div class="row"
         style="display: flex;justify-content: center;align-items: center;margin-left: -100px;margin-top: 50px">
        <div class="col-md-6">
            <h1>we Need Employee?</h1>
            <h3>register Now</h3>
        </div>
    </div>
    <div class="container"
         style="display: flex;justify-content: center;align-items: center;width: 1000px;height: 620px;margin-top: 20px;border-radius: 10px;border: 1px solid black">
        <form class="row g-3" action="/register/seeker" method="post">
            @csrf
            <input type="hidden" name="user_type" value="seeker">
            <div class="col-md-6">
                <label class="form-label">FirstName
                    <input type="text" name="firstName" class="form-control @error('firstName') is-invalid @enderror"
                           style="width: 480px">
                </label>
                <x-errors.field-message name="firstName"/>
            </div>

            <div class="col-md-6">
                <label class="form-label">Last Name
                    <input type="text" name="lastName" class="form-control @error('lastName') is-invalid @enderror"
                           style="width: 480px">
                </label>
                <x-errors.field-message name="lastName"/>
            </div>

            <div class="col-md-6">
                <label class="form-label">Password
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                           style="width: 480px">
                </label>
                <x-errors.field-message name="password"/>
            </div>

            <div class="col-md-6">
                <label class="form-label">Confirm Password
                    <input type="password" name="confirmPassword"
                           class="form-control @error('confirmPassword') is-invalid @enderror" style="width: 480px">
                </label>
                <x-errors.field-message name="confirmPassword"/>
            </div>

            <div class="mb-3">
                <label for="companyInput" class="form-label">Company Name</label>
                <input type="text" name="company" class="form-control @error('company') is-invalid @enderror"
                       id="companyInput" placeholder="Amazon">
                <x-errors.field-message name="company"/>
            </div>

            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                       id="emailInput" placeholder="Amir@gmail.com">
                <x-errors.field-message name="email"/>
            </div>

            <p>you don't have account? &nbsp;<a href="/login">login</a></p>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
@endsection
