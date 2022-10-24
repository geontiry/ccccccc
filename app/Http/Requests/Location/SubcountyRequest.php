<?php

namespace App\Http\Requests\Location;

use Illuminate\Foundation\Http\FormRequest;

class SubcountyRequest extends FormRequest
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
            'county_id' => 'bail|required|exists:Location\County',
            'name' => 'bail|required|string|alpha|max:20|different:name',
            'status' => 'required|boolean',
        ];
    }
}
