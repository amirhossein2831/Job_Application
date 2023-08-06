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
        <form class="row g-3" action="/register/employee" method="post">
            @csrf
            <input type="hidden" name="user_type" value="employee">
            <input type="hidden" name="user_trial" value="{{now()->addWeek()}}">

            <x-field field-name="firstName" type="text" label="First Name" container-class="col-md-6"/>

            <x-field field-name="lastName" type="text" label="Last Name" container-class="col-md-6"/>

            <x-field field-name="password" type="password" label="Password" container-class="col-md-6"/>

            <x-field field-name="confirmPassword" type="password" label="Confirm Password" container-class="col-md-6"/>

            <x-field field-name="company" type="text" label="Company Name" container-class="mb-3"/>

            <x-field field-name="email" type="email" label="Email" container-class="mb-3">Amir@gmail.com</x-field>

            <p>you don't have account? &nbsp;<a href="/login/employee">login</a></p>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
@endsection
