<?php

namespace App\Repositories;

use App\Interfaces\PerfilEmpresaRepositoryInterface;
use App\Models\PerfilEmpresa;

class PerfilEmpresaRepository implements PerfilEmpresaRepositoryInterface
{

    public function all()
    {
        return PerfilEmpresa::all();
    }

    public function find($id)
    {
        return PerfilEmpresa::findOrFail($id);
    }

    public function create(array $data)
    {
        return PerfilEmpresa::create($data);
    }

    public function update($id, array $data)
    {
        $empresa = $this->find($id);
        return $empresa->update($data);
    }

    public function delete($id): int
    {
        return PerfilEmpresa::destroy($id);
    }
}
