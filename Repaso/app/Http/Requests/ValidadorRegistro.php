<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistro extends FormRequest
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
        return [
            'intISBN'=>'required',
            'txtTitulo'=>'required',
            'txtAutor'=>'required',
            'intPaginas'=>'required',
            'txtEditorial'=>'required',
            'email'=>'required',
            'intISBN'=>'numeric|required|min:13',
            'intPaginas'=>'numeric|required',
            'email'=>'required|string|email',
            'txtAutor'=>'required|min:4',
        ];
    }
}
