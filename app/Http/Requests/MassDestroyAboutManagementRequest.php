<?php

namespace App\Http\Requests;

use App\Models\AboutManagement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyAboutManagementRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('about_management_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:about_managements,id',
        ];
    }
}
