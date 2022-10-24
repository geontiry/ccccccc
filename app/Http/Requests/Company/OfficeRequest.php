<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class OfficeRequest extends FormRequest
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
            'department_id'=> 'bail|required|exists:Company\Department',
            'name' => 'required|alpha|max:30|different:name',
        ];
    }
}
