<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ip extends Model
{
    use HasFactory;

    protected $table = 'ips';
    protected $fillable=['ip'];

    public function grupos(): BelongsToMany
    {
        return $this->belongsToMany(Grupo::class);
    }
}
