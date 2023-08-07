<?php

namespace App\Http\Requests\employee;

use App\Rules\IsEmployee;
use App\Rules\IsRegister;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'email'=>['bail','email','required',new IsRegister(),new IsEmployee()],
            'password'=>'required',
        ];
    }
}
