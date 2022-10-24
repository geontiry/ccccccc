<?php

namespace App\Http\Requests\Business;

use App\Enums\Day;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class OperationRequest extends FormRequest
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
            'site_id' => 'bail|required|exists:Company\Site',
            'mode' => 'required|string',
            'day' => [new Enum(Day::class)],
            'open_at' => 'required',
            'close_at' => 'required',
        ];
    }
}
