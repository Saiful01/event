<?php

namespace App\Http\Requests;

use App\Models\CommitteeCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCommitteeCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('committee_category_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:committee_categories,title,' . request()->route('committee_category')->id,
            ],
        ];
    }
}
