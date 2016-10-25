<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RecipeRequest extends Request
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

    public function messages()
    {
        $messages = [];

//        foreach ($this->input('ingredients') as $key => $value) {
//            $messages['ingredients.'.$key.'.name.required'] = 'The name field is required.';
//            $messages['ingredients.'.$key.'.value.required'] = 'The value field is required.';
//        }

        return $messages;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'category' => 'required',
        ];

//        foreach ($this->input('ingredients') as $key => $value) {
//            $rules['ingredients.'.$key.'.name'] = ['required'];
//            $rules['ingredients.'.$key.'.value'] = ['required'];
//        }

        return $rules;
    }
}
