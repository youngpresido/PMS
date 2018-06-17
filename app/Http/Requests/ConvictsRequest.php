<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConvictsRequest extends FormRequest
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
            'name'=>'required',
            'gender'=>'required',
            'Nationality'=>'required',
            'state'=>'required',
            'Address'=>'required',
            'crime'=>'required',
            'Verdict'=>'required',
            'ppix'=>'Image|max:3999',
            'dateconvicted'=>'required'
        ];
    }
}
