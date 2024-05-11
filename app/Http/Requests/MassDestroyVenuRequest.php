<?php

namespace App\Http\Requests;

use App\Models\Venu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVenuRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('venu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:venus,id',
        ];
    }
}
