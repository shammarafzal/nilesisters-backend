<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceRequest extends FormRequest
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
            'title' => 'required',
            'edition' => 'required',
            'context' => 'required',
            'format' => 'required',
            'total_pages' => 'required',
        ], function () {
            if (request()->hasFile(request()->file)) {
                request()->validate([
                    'file' => 'required|file',
                ]);
            }
            if (request()->hasFile(request()->icon)) {
                request()->validate([
                    'icon' => 'required|file|image',
                ]);
            }
        });
    }
}
