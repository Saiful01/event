<?php

namespace App\Http\Requests;

use App\Models\CoHostMalaysium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCoHostMalaysiumRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('co_host_malaysium_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:co_host_malaysia,id',
        ];
    }
}
