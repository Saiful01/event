<?php

namespace App\Http\Requests;

use App\Models\AbstructSubmission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAbstructSubmissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('abstruct_submission_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'type' => [
                'required',
            ],
        ];
    }
}
