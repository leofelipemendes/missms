<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\StoreModuloRequest;
use App\Http\Requests\UpdateModuloRequest;
use App\Http\Resources\ModuloResource;
use App\Interfaces\ModuloRepositoryInterface;
use App\Models\Modulo;

class ModuloController extends Controller
{
    private ModuloRepositoryInterface $repository;

    public function __construct(ModuloRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function getAll()
    {
        $modulos = $this->repository->all();
        return ApiResponseClass::sendResponse(ModuloResource::collection($modulos), 'Modulos retrieved successfully.');
    }

    public function store(StoreModuloRequest $request)
    {
        $request->validated();
        $novoModulo = $this->repository->create($request->all());
        return ApiResponseClass::sendResponse(new ModuloResource($novoModulo), 'Modulo created successfully.');
    }

    public function getById($moduloId)
    {
        $modulo = $this->repository->find($moduloId);
        return ApiResponseClass::sendResponse($modulo, 'Modulo retrieved successfully.');
    }

    public function update($moduloId, UpdateModuloRequest $request)
    {
        $request->validated();
        $modulo = $this->repository->update($moduloId, $request->all());
        if (!$modulo) {
            return ApiResponseClass::sendResponse($moduloId,'Erro ao atualizar o modulo!');
        }
        return ApiResponseClass::sendResponse('Sucess', 'Modulo editado com sucesso!');

    }

    public function destroy(Modulo $modulos)
    {
        //
    }
}
