<?php

namespace App\Repositories;

use App\Interfaces\ModuloRepositoryInterface;
use App\Models\Empresa;
use App\Models\Modulo;

class ModuloRepository implements ModuloRepositoryInterface
{
    public function all()
    {
        return Modulo::all();
    }

    public function find($id)
    {
        return Modulo::findOrFail($id);
    }

    public function create(array $data)
    {
        return Modulo::create($data);
    }

    public function update($id, array $data)
    {
        $modulo = $this->find($id);
        return $modulo->update($data);
    }

    public function delete($id): int
    {
        return Empresa::destroy($id);
    }
}
