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

        $id = $this->segment(2);

        if ($id != '') {
            return [
                'name' => "required|min:3|max:255|unique:products,name,{$id},id",
                'description' => 'required|min:3|max:10000',
                'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
                'photo' => 'nullable|image',
            ];
        }

        return [
            'name' => "required|min:3|max:255|unique:products,name",
            'description' => 'required|min:3|max:10000',
            'price' => "required|regex:/^\d+(\.\d{1,2})?$/",
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
