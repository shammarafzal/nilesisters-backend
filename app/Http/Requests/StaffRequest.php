<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
        return tap([
            'name' => 'required',
            'education' => 'required',
            'designation' => 'required',
            'age' => 'required',
            'country' => 'required',
        ], function () {
            if (request()->hasFile(request()->image)) {
                request()->validate([
                    'image' => 'required|file|image',
                ]);
            }
        });
    }
}
