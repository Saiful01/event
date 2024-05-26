<?php

namespace App\Http\Requests;

use App\Models\CommitteeCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCommitteeCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('committee_category_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:committee_categories',
            ],
        ];
    }
}
