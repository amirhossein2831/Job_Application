@extends('layouts.admin.main')
@section('contact')
    <div class="container mt-5">
        <div class="row justify-content-center"></div>
        <div class="col-md-8 mt-5"></div>
        <h1>Post Job</h1>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
            <x-input-field label="Title" id="title" name="title" type="text" value="{{old('title')}}"/>
            <x-input-field label="Description" id="description" name="description" type="textarea" value="{{old('description')}}"/>
            <x-input-field label="Roles and Responsibility" id="roles" name="roles" type="textarea" value="{{old('roles')}}"/>
            <x-input-field label="Salary" id="salary" name="salary" type="text" value="{{old('salary')}}"/>
            <x-input-field label="Address" id="address" name="address" type="text" value="{{old('address')}}"/>
            <x-input-field label="Closing Date" id="close_date" name="close_date" type="date" value="{{old('close_date')}}"/>
            <x-input-field label="Job Image" id="post_image" name="post_image" type="file" value="{{old('post_image')}}"/>
            <div class="form-group mt-3">
                <label for="">Job Type</label>
                <x-input-field label="Full Time" id="fullTime" name="fullTime" type="radio" value="checked"></x-input-field>
                <x-input-field label="Part Time" id="partTime" name="partTime" type="radio" value=""/>
                <x-input-field label="Casual" id="casual" name="casual" type="radio" value=""/>
                <x-input-field label="Contract" id="contract" name="contract" type="radio" value=""/>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-success">Post Job</button>
            </div>
        </form>
    </div>
@endsection
