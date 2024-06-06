<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PerfilEmpresa extends Model
{
    use HasFactory;

    protected $table = 'empresa_perfis';

    protected $fillable = [
        'nome_perfil',
        'ativo'
    ];

    public function empresas(): HasMany
    {
        return $this->hasMany(Empresa::class);
    }
}
