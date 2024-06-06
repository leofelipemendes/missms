<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'razao_social',
            'nome_fantasia',
            'cnpj',
            'endereco',
            'telefone',
            'email',
            'contato',
            'empresa_perfis_id'
        ];
    }
}
