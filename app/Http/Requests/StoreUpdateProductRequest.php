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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->segment(2);
        return [
            'name' => "required|min:3|max:255|unique:products,name,{$id},id",
            'description' => 'nullable|min:3|max:10000',
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo <strong>nome</strong> é obrigatório",
            'name.min' => "O campo <strong>nome</strong> precisa ter no mínimo 3 caracteres",
            'description.min' => "O campo <strong>descrição</strong> precisa ter no mínimo 3 caracteres",
            'price.required' => "O campo <strong>preço</strong> é obrigatório",
            'price.regex' => "O campo <strong>preço</strong> precisa ter um valor monetário válido",
        ];
    }

}
