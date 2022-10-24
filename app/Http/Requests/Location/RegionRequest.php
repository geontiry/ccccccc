<?php

namespace App\Http\Requests\Location;

use Illuminate\Foundation\Http\FormRequest;

class RegionRequest extends FormRequest
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
            // 'name' => 'required|string|alpha|unique:App\Models\Location\Region,name',
            'name' => 'required|string|alpha|max:20|different:name',
        ];
    }
}
