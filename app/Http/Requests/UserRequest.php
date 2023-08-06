<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'firstName'=>'required|string|max:24|min:5',
            'lastName'=>'required|string|max:24|min:5',
            'password'=>'required|string|max:24|min:8',
            'confirmPassword' => 'required|same:password|min:8',
            'email'=>'required|email|unique:users'
        ];
    }
}
