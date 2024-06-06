<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Modulo>
 */
class ModuloFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => fake()->word(),
            'path_modulo' => fake()->filePath() ,
            'ativo' => fake()->boolean
        ];
    }
}
