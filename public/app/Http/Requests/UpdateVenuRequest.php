<?php

namespace App\Http\Requests;

use App\Models\Venu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVenuRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('venu_edit');
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
