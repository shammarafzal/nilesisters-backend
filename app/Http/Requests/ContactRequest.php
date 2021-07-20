<?php

namespace App\Http\Requests;

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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'office_name' => 'required',
            'address' => 'required',
            'english_phone' => 'required',
            'spanish_phone' => 'required',
            'email' => 'required',
            'facebook_page_1' => 'required',
            'instagram_page_1' => 'required',
        ];
    }
}
