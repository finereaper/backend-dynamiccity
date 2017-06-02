<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HuurafspraakRequest extends FormRequest
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
            'gebruikerStartdatum' => 'required',
            'gebruikerEinddatum' => 'required',
            'gebruikerAantalplekken' => 'required|numeric|max:2'
        ];
        return $rules;
    }
}
