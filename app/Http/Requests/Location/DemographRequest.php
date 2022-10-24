<?php

namespace App\Http\Requests\Location;

use Illuminate\Foundation\Http\FormRequest;

class DemographRequest extends FormRequest
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
            'subcounty_id' => 'bail|required|exists:Location\Subcounty',
            'population' => 'required|digits_between:4,8',
        ];
    }
}
