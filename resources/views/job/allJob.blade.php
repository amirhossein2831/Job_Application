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
                                <th>Title</th>
                                <th>Description</th>
                                <th>Roles</th>
                                <th>Job Type</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Close Date</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Roles</th>
                                <th>Job Type</th>
                                <th>Address</th>
                                <th>Salary</th>
                                <th>Close Date</th>
                                <th>Image</th>
                                <th>Action</th>

                            </tr>
                            </tfoot>
                            <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->title}}</td>
                                        <td>{{$job->description}}</td>
                                        <td>{{$job->roles}}</td>
                                        <td>{{$job->job_type}}</td>
                                        <td>{{$job->address}}</td>
                                        <td>{{$job->salary}}</td>
                                        <td>{{$job->close_date}}</td>
                                        <td><img style="width: 50px;height: 30px" src="{{\Illuminate\Support\Facades\Storage::url($job->post_image)}}" alt=""></td>
                                        <td>
                                            <a style="color: #157347;font-size: 16px;padding: 7px 12px;text-decoration: none;background: #dee2e6" href="/job/applicants/{{$job->id}}">Applicants</a>
                                            <form  style="display: inline"  action="/job/delete" method="post">
                                                @csrf
                                                @method("DELETE")
                                                <input type="hidden" name="delete" value="{{$job->id}}">
                                                <button style="border: 8px;height: 30px;color: red;background: #dee2e6" type="submit">Delete</button>
                                            </form>
                                            <a style="color: dodgerblue;font-size: 16px;padding: 7px 12px;text-decoration: none;background: #dee2e6" href="/job/edit/{{$job->id}}">edit</a>
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
