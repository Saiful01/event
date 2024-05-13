<?php

namespace App\Http\Requests;

use App\Models\AboutManagement;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAboutManagementRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_management_create');
    }

    public function rules()
    {
        return [];
    }
}
