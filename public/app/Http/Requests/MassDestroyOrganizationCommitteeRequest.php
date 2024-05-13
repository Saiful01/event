<?php

namespace App\Http\Requests;

use App\Models\OrganizationCommittee;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOrganizationCommitteeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('organization_committee_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:organization_committees,id',
        ];
    }
}
