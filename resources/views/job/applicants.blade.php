@extends('layouts.admin.main')

@section('contact')

    <div id="layoutSidenav_content" style="margin-left: -200px">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Applicants</h1>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Applicants of Your job
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Shortlist</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Shortlist</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody >
                            @foreach($applicants as $applicant)
                            <tr>
                                <td>{{$applicant->firstName}}</td>
                                <td>{{$applicant->lastName}}</td>
                                <td>{{$applicant->email}}</td>
                                <td>
                                    @if($applicant->pivot->shortlisted)
                                        Added
                                    @else
                                        Not Added
                                    @endif
                                </td>
                                <td>
                                    @if($applicant->pivot->shortlisted)
                                        <a class="black-button" href="/job/applicants/unShortlist/{{$post->id}}/{{$applicant->id}}">Remove from shortlist</a>
                                    @else
                                        <a class="green-button" href="/job/applicants/shortlist/{{$post->id}}/{{$applicant->id}}">Add to shortlist</a>
                                    @endif
                                        <a class="blue-button" style="color: #FFFFFF;background: #007bff;font-size: 16px;padding: 7px 12px;border-radius: 5px;text-decoration: none;" href="/profile/user/{{$applicant->id}}">Profile</a>
                                    <form  style="display: inline"  action="/job/applicants/delete" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <input type="hidden" name="delete" value="{{$post->id}}">
                                        <input type="hidden" name="user" value="{{$applicant->id}}">
                                        <button class="red-button"  type="submit">Delete</button>
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
