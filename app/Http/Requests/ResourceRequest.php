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
            'contact' => 'required',
            'edition'=> 'required',
            'format' => 'required',
            'page_size' => 'required',
            'page_count' => 'required',
        ], function (){
            if(request()->hasFile(request()->pdf)){
                request()->validate([
                    'pdf' => 'required|file|image',
                ]);
            }
            if(request()->hasFile(request()->pdf_icon)){
                request()->validate([
                    'pdf_icon' => 'required|file|image',
                ]);
            }
        });
    }
}
