<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\StoreModuloRequest;
use App\Http\Requests\UpdateModuloRequest;
use App\Http\Resources\ModuloResource;
use App\Services\ModuloService;

class ModuloController extends Controller
{
    private ModuloService $service;

    public function __construct(ModuloService $service)
    {
        $this->service = $service;
    }
    public function getAll()
    {
        $modulos = $this->service->all();
        return ApiResponseClass::sendResponse(ModuloResource::collection($modulos), 'Modulos retrieved successfully.');
    }

    public function store(StoreModuloRequest $request)
    {
        $request->validated();
        $novoModulo = $this->service->create($request->all());
        return ApiResponseClass::sendResponse(new ModuloResource($novoModulo), 'Modulo created successfully.');
    }

    public function getById($moduloId)
    {
        $modulo = $this->service->find($moduloId);
        return ApiResponseClass::sendResponse($modulo, 'Modulo retrieved successfully.');
    }

    public function update(UpdateModuloRequest $request, $moduloId)
    {
        $request->validated();
        $modulo = $this->service->update($request->all(), $moduloId);
        if (!$modulo) {
            return ApiResponseClass::sendResponse($moduloId,'Erro ao atualizar o modulo!');
        }
        return ApiResponseClass::sendResponse('Sucess', 'Modulo editado com sucesso!');

    }
}
