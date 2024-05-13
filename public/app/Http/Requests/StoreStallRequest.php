<?php

namespace App\Http\Requests;

use App\Models\Stall;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStallRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('stall_create');
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
