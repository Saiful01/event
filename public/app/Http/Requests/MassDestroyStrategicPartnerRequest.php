<?php

namespace App\Http\Requests;

use App\Models\StrategicPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyStrategicPartnerRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('strategic_partner_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:strategic_partners,id',
        ];
    }
}
