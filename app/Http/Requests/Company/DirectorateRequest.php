<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class DirectorateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company_id'=> 'bail|required|exists:Company\Company',
            'name' => 'required|alpha|max:30|different:name',
            'description' => 'required|string',
            'code' => 'required|string|size:3',
        ];
    }
}
