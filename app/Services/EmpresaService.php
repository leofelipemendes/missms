<?php

namespace App\Services;

use App\Interfaces\EmpresaRepositoryInterface;

class EmpresaService
{
    private EmpresaRepositoryInterface $empresaRepository;
    public function __construct(EmpresaRepositoryInterface $empresaRepository)
    {
        $this->empresaRepository = $empresaRepository;
    }

    public function getAll()
    {
        return $this->empresaRepository->all();
    }

    public function store($request)
    {
        return $this->empresaRepository->create($request->all());
    }

    public function getById(int $id)
    {
        return $this->empresaRepository->find($id);
    }

    public function update(int $id, $request)
    {
        return $this->empresaRepository->update($id, $request->all());
    }

}
