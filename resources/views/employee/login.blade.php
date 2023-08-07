@extends('layouts.app')
@section('contact')

    <div style="margin-left: 280px;margin-top: 100px">
        <h1>login</h1>
    </div>
    <div class="container"
    style="display: flex;justify-content: center;align-items: center;width: 1000px;height: 450px;margin-top: 20px;border-radius: 10px;border: 1px solid black">
        <form class="row g-3" action="/login/employee" method="post">
            @csrf
            <x-field field-name="email" type="email" label="Email" container-class="mb-3">Amir@gmail.com</x-field>

            <x-field field-name="password" type="password" label="Password" container-class="col-md-6"/>

            <p>you don't have account? &nbsp;<a href="/register/employee">register</a></p>

            <x-button.submit-button container-class="col-12" label="Login"/>
        </form>
    </div>
@endsection
