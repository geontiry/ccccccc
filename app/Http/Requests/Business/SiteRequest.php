<?php

namespace App\Http\Requests\Business;

use Illuminate\Foundation\Http\FormRequest;

class SiteRequest extends FormRequest
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
            'business_id' => 'bail|required|exists:Company\Business',
            'code'=>'required|digits:1',
            'name' => 'required|alpha|max:30|different:name',
            'domain' => 'required|url',
            'status' => 'required|string',
            'description' => 'required|string',
        ];
    }
}
