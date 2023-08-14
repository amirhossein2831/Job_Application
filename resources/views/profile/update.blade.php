@extends('layouts.app')

@section('contact')
    <div id="container" class="wrapper" style="height: auto;width: 500px">
        <div class="form-box login">
            <h2>Update Profile</h2>
            <form action="/profile/update" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <x-field field-name="firstName" type="text" label="First Name" icon-name="person" value="{{$user->firstName}}"/>

                <x-field field-name="lastName" type="text" label="Last Name" icon-name="person" value="{{$user->lastName}}"/>

                <x-field field-name="about" type="text" icon-name="person" label="About" value="{{$user->about}}"/>

                @if($user->user_type === 'employee')
                    <x-field field-name="company" type="text" label="Company Name" icon-name="build" value="{{$user->company}}"/>
                @else
                    <x-field field-name="resume" type="text" icon-name="person" label="Resume" value="{{$user->resume}}"/>
                @endif

                <input style="margin-top: 10px;cursor: pointer;margin-bottom: 30px" name="profile_pic" type="file" value="">
                <label>Profile Image</label>

                <button type="submit" id="register-btn" class="button">Update</button>
            </form>
        </div>
@endsection
