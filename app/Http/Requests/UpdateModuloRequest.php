<?php

namespace App\Http\Requests;


class UpdateModuloRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome',
            'path_modulo',
            'ativo'
        ];
    }
}
