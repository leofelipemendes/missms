<?php

namespace App\Repositories;

use App\Interfaces\PerfilUsuarioRepositoryInterface;
use App\Models\PerfilUsuario;

class PerfilUsuarioRepository implements PerfilUsuarioRepositoryInterface
{

    public function all()
    {
        return PerfilUsuario::all();
    }

    public function find($id)
    {
        return PerfilUsuario::findOrFail($id);
    }

    public function create(array $data)
    {
        return PerfilUsuario::create($data);
    }

    public function update($id, array $data)
    {
        $empresa = $this->find($id);
        return $empresa->update($data);
    }

    public function delete($id): int
    {
        return PerfilUsuario::destroy($id);
    }
}
