<?php

namespace App\Repositories;

use App\Interfaces\EmpresaRepositoryInterface;
use App\Models\Empresa;

class EmpresaRepository implements EmpresaRepositoryInterface
{
    public function all()
    {
        return Empresa::all();
    }

    public function find($id)
    {
        return Empresa::findOrFail($id);
    }

    public function create(array $data)
    {
        return Empresa::create($data);
    }

    public function update($id, array $data)
    {
        $empresa = $this->find($id);
        return $empresa->update($data);
    }

    public function delete($id): int
    {
        return Empresa::destroy($id);
    }
}
