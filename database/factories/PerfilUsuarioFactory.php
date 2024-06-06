<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerfilUsuario>
 */
class PerfilUsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_perfil' => fake()->randomElement(['admin','sup','padrao']),
            'ativo' => fake()->boolean
        ];
    }
}
