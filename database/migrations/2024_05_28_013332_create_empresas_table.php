<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('razao_social')->nullable(false);;
            $table->string('nome_fantasia')->nullable(false);;
            $table->string('cnpj')->unique()->nullable(false);
            $table->string('endereco')->nullable(false);
            $table->string('telefone')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('contato')->nullable(false);
            $table->foreignId('empresa_perfis_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
