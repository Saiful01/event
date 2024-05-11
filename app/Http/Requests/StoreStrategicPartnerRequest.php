<?php

namespace App\Http\Requests;

use App\Models\StrategicPartner;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStrategicPartnerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('strategic_partner_create');
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
