<?php

namespace Database\Factories;

use App\Models\PerfilEmpresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerfilEmpresaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome_perfil' => fake()->randomElement(['matriz','revenda','cliente']),
            'ativo' => fake()->boolean

        ];
    }
}
