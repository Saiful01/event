<?php

namespace App\Http\Requests;

use App\Models\Stall;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStallRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('stall_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:stalls,id',
        ];
    }
}
