<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormContato extends FormRequest
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
            'nome'          => 'required|max:70|min:2|regex:/^[A-ZÀÁÂÃÇÉÈÊÌÍÔÕÛÙa-zàáâãçéèêìíôûù ]+$/',
            'email'         => 'required|email:rfc,dns',
            'telefone'      => 'required|max:15|min:10',
            'empresa'       => 'required|max:80|min:1',
            'assunto'       => 'required|max:80|min:1',
            'mensagem'      => 'max:200'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nome.required'     => 'O nome é um campo obrigatório',
            'nome.max'          => 'Atingido limite de caracteres',
            'nome.min'          => 'O nome deve conter mais de 5 caracteres',
            'nome.regex'        => 'Caracteres inválidos',
            'email.required'    => 'O E-mail é um campo obrigatório',
            'email.email'       => 'O E-mail deve ser válido',
            'telefone.required' => 'O telefone é um campo obrigatório',
            'telefone.max'      => 'O número deve ser válido',
            'telefone.min'      => 'O número deve ser válido',
            'empresa.required'  => 'A empresa é um campo obrigatório',
            'empresa.max'       => 'Atingido limite de caracteres',
            'empresa.min'       => 'A empresa deve conter mais de 5 caracteres',
            'assunto.required'  => 'O assunto é um campo obrigatório',
            'assunto.max'       => 'Atingido limite de caracteres',
            'assunto.min'       => 'O assunto deve conter mais de 5 caracteres',
            'mensagem.max'      => 'Atingido limite de caracteres'
        ];
    }
}
