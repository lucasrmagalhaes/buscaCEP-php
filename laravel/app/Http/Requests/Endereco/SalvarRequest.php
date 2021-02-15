<?php

namespace App\Http\Requests\Endereco;

use Illuminate\Foundation\Http\FormRequest;

class SalvarRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Sem Sistema de Login. Qualquer pessoa pode consultar o CEP.
    }

    // Regras - Validação.
    public function rules() 
    {
        return [
            'cep' => 'required|string',
            'logradouro' => 'required|string',
            'numero' => 'required|string',
            'bairro' => 'required|string',
            'cidade' => 'required|string',
            'estado' => 'required|string'
        ];
    }
}
