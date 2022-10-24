<?php

namespace App\Http\Requests\Business;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'site_id' => 'bail|required|exists:Company\Site|different:site_id',
            'address'=>'required|string',
            'phone'=>'required|digits:10',
            'email'=>'required|email',
            'facebook'=>'required|active_url',
            'linkedin'=>'required|active_url',
            'instagram'=>'required|active_url',
            'youtube'=>'required|active_url',
        ];
    }
}
