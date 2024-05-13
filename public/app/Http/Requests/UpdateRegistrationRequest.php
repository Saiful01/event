<?php

namespace App\Http\Requests;

use App\Models\Registration;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('registration_edit');
    }

    public function rules()
    {
        return [
            'email' => [
                'required',
            ],
            'title' => [
                'required',
            ],
            'full_name' => [
                'string',
                'required',
            ],
            'gender' => [
                'required',
            ],
            'institution' => [
                'string',
                'required',
            ],
            'current_position' => [
                'string',
                'nullable',
            ],
            'faculty' => [
                'string',
                'nullable',
            ],
            'department' => [
                'string',
                'nullable',
            ],
            'research_field' => [
                'string',
                'nullable',
            ],
            'city' => [
                'string',
                'nullable',
            ],
            'postal_code' => [
                'string',
                'nullable',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'mobile' => [
                'string',
                'nullable',
            ],
        ];
    }
}
