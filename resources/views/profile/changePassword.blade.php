@extends('layouts.app')

@section('contact')
    <div id="container" class="wrapper" style="height: auto;width: 500px">
        <div class="form-box login">
            <h2>Change Password</h2>
            <form action="/profile/changePass" method="post">
                @csrf
                @method('patch')
                <x-field field-name="old_password" type="password" label="Old Password" icon-name="lock-closed" value=""/>

                <x-field field-name="new_password" type="password" label="New Password" icon-name="lock-closed" value=""/>

                <x-field field-name="confirmPassword" type="password" label="Confirm Password" icon-name="lock-closed" value=""/>

                <button type="submit" id="register-btn" class="button">Change Password</button>
            </form>
        </div>
@endsection
