<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = ['nome','custo'];

    public $timestamps = true;

    public function ips(): BelongsToMany
    {
        return $this->belongsToMany(Ip::class);
    }
}
