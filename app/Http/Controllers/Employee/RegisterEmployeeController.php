<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\employee\RegisterRequest;
use App\Models\User;

class RegisterEmployeeController extends Controller
{
    public function index()
    {
        return view('employee.register');
    }

    public function store(RegisterRequest $request)
    {
        User::create($request->all());
        return redirect('/login/employee');
    }
}
