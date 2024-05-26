<?php

namespace App\Http\Requests;

use App\Models\OrganizationCommittee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrganizationCommitteeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('organization_committee_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
