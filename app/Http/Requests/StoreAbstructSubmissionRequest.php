<?php

namespace App\Http\Requests;

use App\Models\AbstructSubmission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAbstructSubmissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('abstruct_submission_create');
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
