<?php

namespace App\Http\Requests;

use App\Models\StrategicPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStrategicPartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('strategic_partner_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
