<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormTrabalheConosco extends FormRequest
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
            'nome'          => 'required|max:70|min:5|regex:/^[A-ZÀÁÂÃÇÉÈÊÌÍÔÕÛÙa-zàáâãçéèêìíôûù ]+$/',
            'email'         => 'required|email:rfc,dns',
            'telefone'      => 'required|max:15|min:15',
            'curriculo'     => 'required|mimes:pdf,doc,docx'
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
            'curriculo.required' => 'O currículo é um campo obrigatório',
            'curriculo.mimes'   => 'Tipo do arquivo inválido, válidos apenas pdf,doc,docx'
        ];
    }
}
