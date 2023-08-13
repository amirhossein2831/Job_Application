<?php

namespace App\Http\Requests\employee;

use Illuminate\Foundation\Http\FormRequest;

class PostJobRequest extends FormRequest
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
            'title'=>'required|min:5',
            'post_image'=>'required|mimes:png,jpeg,jpg',
            'description'=>'required|min:10|max:255',
            'roles'=>'required|min:10|max:255',
            'job_type'=>'required',
            'salary'=>'required|numeric',
            'address'=>'required|min:5',
            'close_date'=>'required'
        ];
    }
}
