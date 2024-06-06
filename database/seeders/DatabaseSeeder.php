<?php

namespace Database\Seeders;

use App\Models\Grupo;
use App\Models\Ip;
use App\Models\Servico;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        PerfilEmpresa::factory(5)->create();
//        PerfilUsuario::factory(5)->create();
//        User::factory(10)->create();
//        Empresa::factory(10)->create();
//        Modulo::factory(3)->create();
        Servico::factory(10)->create();
        $grupos = Grupo::factory(2)->create();
        $ips = Ip::factory(10)->create();

        foreach ($grupos as $grupo) {
            // Cada usuário recebe 1 a 3 roles aleatórias
            $grupo->ips()->attach(
                $ips->random(rand(1, 5))->pluck('id')->toArray()
            );
        }
    }
}
