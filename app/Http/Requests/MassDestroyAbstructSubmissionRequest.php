<?php

namespace App\Http\Requests;

use App\Models\AbstructSubmission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAbstructSubmissionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('abstruct_submission_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:abstruct_submissions,id',
        ];
    }
}
