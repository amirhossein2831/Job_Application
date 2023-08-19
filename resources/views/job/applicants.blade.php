@extends('layouts.admin.main')

@section('contact')

    <div id="layoutSidenav_content" style="margin-left: -200px">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Jobs</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Your job table
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($applicants as $applicant)
                                <tr>
                                    <td>{{$applicant->firstName}}</td>
                                    <td>{{$applicant->lastName}}</td>
                                    <td>{{$applicant->email}}</td>
                                    <td>
                                        <a style="color: #157347;font-size: 16px;padding: 7px 12px;text-decoration: none;background: #dee2e6" href="/profile/user/{{$applicant->id}}">Profile</a>
                                        <form  style="display: inline"  action="/job/applicants/delete" method="post">
                                            @csrf
                                            @method("DELETE")
                                            <input type="hidden" name="delete" value="{{$post->id}}">
                                            <input type="hidden" name="user" value="{{$applicant->id}}">
                                            <button style="border: 8px;height: 30px;color: red;background: #dee2e6" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
