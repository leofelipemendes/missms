<?php

namespace App\Services;

use App\Repositories\ModuloRepository;

class ModuloService
{
    private ModuloRepository $repository;

    public function __construct(ModuloRepository $repository)
    {
        $this->repository = $repository;
    }
    public function getAll()
    {
        return $this->repository->all();
    }
    public function getById(int $id)
    {
        return $this->repository->find($id);
    }
    public function create(array $data)
    {
        return $this->repository->create($data);
    }
    public function update(array $data, int $id)
    {
        return $this->repository->update($id, $data);
    }
    public function delete(int $id)
    {

    }
}
