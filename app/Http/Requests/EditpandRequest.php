<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditpandRequest extends FormRequest
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
        $rules = [
            'pandOppervlakte' => 'required|numeric',
            'pandOmschrijving' => 'required|min:0|max:255',
            'pandStraat' => 'required', ['regex:/^([1-9][e][\s])*([a-zA-Z]+(([\.][\s])|([\s]))?)+[1-9][0-9]*(([-][1-9][0-9]*)|([\s]?[a-zA-Z]+))?$/i'],
            'pandPostcode' => 'required|min:6|max:6', ['regex:/^[1-9]{1}[0-9]{3}[\s]{0,1}[a-z]{2}$/i'],
            'pandStad' => 'required|min:2|max:45',
            'pandPrijs' => 'required|numeric',
            'pandLigging' => 'required|min:2|max:40',
            'pandStatus' => 'required|min:2|max:40',
            'pandPlekken' => 'required|numeric'
        ];

        return $rules;
    }
}
