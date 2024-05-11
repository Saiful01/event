<?php

namespace App\Http\Requests;

use App\Models\CoHostMalaysium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCoHostMalaysiumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('co_host_malaysium_create');
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
