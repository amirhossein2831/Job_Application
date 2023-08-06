@extends('layouts.app')
@section('contact')

    <div class="row" style="display: flex;justify-content: center;align-items: center;margin-left: -100px;margin-top: 100px">
        <div class="col-md-6" >
            <h1>Looking for a job?</h1>
            <h3>register Now</h3>
        </div>
    </div>
    <div class="container" style="display: flex;justify-content: center;align-items: center;width: 1000px;margin-top: 20px;height: 400px;border-radius: 10px;border: 1px solid black">
        <form class="row g-3">
            <div class="col-md-6">
                <label class="form-label">FirstName
                    <input type="text" class="form-control" style="width: 480px">
                </label>
            </div>
            <div class="col-md-6">
                <label class="form-label">Last Name
                    <input type="text" class="form-control"style="width: 480px">
                </label>
            </div>
            <div class="col-md-6">
                <label class="form-label">Password
                    <input type="password" class="form-control" style="width: 480px">
                </label>
            </div>
            <div class="col-md-6">
                <label class="form-label">Confirm Password
                    <input type="password" class="form-control"style="width: 480px">
                </label>
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" placeholder="Amir@gmail.com">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
@endsection
