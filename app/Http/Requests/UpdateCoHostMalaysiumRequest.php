<?php

namespace App\Http\Requests;

use App\Models\CoHostMalaysium;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCoHostMalaysiumRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('co_host_malaysium_edit');
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
