<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'razao_social',
        'nome_fantasia',
        'cnpj',
        'endereco',
        'telefone',
        'email',
        'contato',
        'empresa_perfis_id'
    ];

    public function perfil(): BelongsTo
    {
        return $this->belongsTo(PerfilEmpresa::class);
    }

    public function usuarios(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function modulos(): HasMany
    {
        return $this->hasMany(Modulo::class);
    }

}
