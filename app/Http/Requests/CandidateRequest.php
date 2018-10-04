<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'linkedin' => 'required',
            'github' => 'required',
            'desired_salary' => 'required',
            'curriculum_file' => 'required|file|mimes::doc,pdf,docx|max:2048',
            'english' => 'required'
        ];
    }
}
