@extends('layouts.admin.main')
@section('contact')
    <div class="container mt-5">
        <div class="row justify-content-center"></div>
        <div class="col-md-8 mt-5"></div>
        <h1>Edit Job</h1>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" value="{{Auth::id()}}">
            <x-input-field label="Title" id="title" name="title" type="text" value="{{$post->title}}"/>
            <x-input-field label="Description" id="description" name="description" type="textarea" value="{{$post->description}}"/>
            <x-input-field label="Roles and Responsibility" id="roles" name="roles" type="textarea" value="{{$post->roles}}"/>
            <x-input-field label="Salary" id="salary" name="salary" type="text" value="{{$post->salary}}"/>
            <x-input-field label="Address" id="address" name="address" type="text" value="{{$post->address}}"/>
            <x-input-field label="Closing Date" id="close_date" name="close_date" type="date" value="{{$post->close_date}}"/>
            <x-input-field label="Job Image" id="post_image" name="post_image" type="file" value="{{$post->post_image}}"/>
            <div class="form-group mt-3">
                <?php $job = $post->job_type; ?>
                <label for="">Job Type</label>
                <x-input-field label="Full Time" id="fullTime" name="fullTime" type="radio" value="">@if($job === 'fullTime') checked @endif</x-input-field>
                <x-input-field label="Part Time" id="partTime" name="partTime" type="radio" value="">@if($job === 'partTime') checked @endif</x-input-field>
                <x-input-field label="Casual" id="casual" name="casual" type="radio" value="">@if($job === 'casual') checked @endif</x-input-field>
                <x-input-field label="Contract" id="contract" name="contract" type="radio" value="">@if($job === 'contract') checked @endif</x-input-field>
            </div>
            <div class="form-group mt-5">
                <button type="submit" class="btn btn-success">Update Job</button>
            </div>
        </form>
    </div>
@endsection
