<?php

namespace App\Http\Requests;

use App\Models\ImportantDate;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreImportantDateRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('important_date_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'date' => [
                'string',
                'required',
            ],
        ];
    }
}
