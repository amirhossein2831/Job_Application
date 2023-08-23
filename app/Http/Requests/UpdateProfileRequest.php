<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'firstName' => 'min:5|max:24',
            'lastName'=>'min:5|max:24',
            'about' => 'min:10|max:255',
            'profile_pic '=>'mimes:png,jpeg,jpg,pdf',
        ];
    }
}
