<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:10000',
            'price' => 'required',
            'photo' => 'nullable|image',
        ];
    }

    public function messages(){
        
        return[
            'name.required' => 'Nome é obrigatorio',
            'name.min' => 'o nome deve ter mais de 3 caracteres',
            'photo.required' => 'A foto é obrigatoria'
        ];
    }
}
