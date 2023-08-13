@extends('layouts.admin.main')
@section('contact')
    <div class="container mt-5">
        <div class="row justify-content-center"></div>
        <div class="col-md-8 mt-5"></div>
        <h1>Post a Job</h1>
        <form action="" method="post">
            @csrf
            <x-input-field label="Title" id="title" name="title" type="text"/>
            <x-input-field label="Description" id="description" name="description" type="textarea"/>
            <x-input-field label="Roles and Responsibility" id="roles" name="roles" type="textarea"/>
            <x-input-field label="Address" id="address" name="address" type="text"/>
            <x-input-field label="Closing Date" id="closingDate" name="closingDate" type="date"/>
            <x-input-field label="Job Image" id="jobImage" name="jobImage" type="file"/>
            <div class="form-group mt-3">
                <label for="">Job Type</label>
                <x-input-field label="Full Time" id="fullTime" name="fullTime" type="radio"/>
                <x-input-field label="Part Time" id="partTime" name="partTime" type="radio"/>
                <x-input-field label="Casual" id="casual" name="casual" type="radio"/>
                <x-input-field label="Contract" id="contract" name="contract" type="radio"/>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-success">Post Job</button>
            </div>
        </form>
    </div>
@endsection
