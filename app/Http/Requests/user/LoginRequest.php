<?php

namespace App\Http\Requests\user;

use App\Rules\IsRegister;
use App\Rules\IsUser;
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
            'email'=>['bail','email','required',new IsRegister(),new IsUser()],
            'password'=>'required',
        ];
    }
}
