<?php

namespace App\Http\Requests;

use App\Models\Submission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSubmissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('submission_create');
    }

    public function rules()
    {
        return [];
    }
}
