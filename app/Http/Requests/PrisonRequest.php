<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrisonRequest extends FormRequest
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
            'dob'=>'required',
            'judge'=>'required',
            'Nationality'=>'required',
            'state'=>'required',
            'Address'=>'required',
            'crime'=>'required',
            'Verdict'=>'required',
            'dateconvicted'=>'required',
            'ppix'=>'mimes:jpg,jpeg,png,gif,png|max:300'
        ];
    }
}
