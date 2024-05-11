<?php

namespace App\Http\Requests;

use App\Models\Speaker;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSpeakerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('speaker_create');
    }

    public function rules()
    {
        return [
            'category' => [
                'required',
            ],
            'name' => [
                'string',
                'required',
            ],
            'designation' => [
                'string',
                'nullable',
            ],
            'link' => [
                'string',
                'nullable',
            ],
        ];
    }
}
