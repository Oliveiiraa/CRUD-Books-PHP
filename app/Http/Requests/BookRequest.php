<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title'=>'required',
            'pages'=>'required|numeric',
            'id_user'=>'required',
            'price'=>'required',
        ];
    }

    public function messages()
{
    return [
        'title.required' => 'O campo Título é obrigatório!',
        'pages.required' => 'O campo Páginas é obrigatório!',
        'id_user.required' => 'O campo Autor é obrigatório!',
        'price.required' => 'O campo Preço é obrigatório!',
        'pages.numeric' => 'O campo Páginas precisa ser numérico!',
    ];
}
}
