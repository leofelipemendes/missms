<?php

namespace Database\Factories;

use App\Models\Empresa;
use App\Models\PerfilEmpresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    protected $model = Empresa::class;
    public function definition(): array
    {
        return [
            'razao_social' => fake()->company(),
            'nome_fantasia' => fake()->company(),
            'cnpj' => fake()->randomNumber(9),
            'endereco' => fake()->address(),
            'telefone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'contato' => fake()->firstName,
            'empresa_perfis_id' => PerfilEmpresa::factory()->create()->id,

        ];
    }
}
