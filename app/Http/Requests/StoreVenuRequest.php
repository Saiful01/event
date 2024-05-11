<?php

namespace App\Http\Requests;

use App\Models\Venu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVenuRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('venu_create');
    }

    public function rules()
    {
        return [
            'suggested_accommodation' => [
                'required',
            ],
        ];
    }
}
