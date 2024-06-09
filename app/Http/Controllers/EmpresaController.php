<?php

namespace App\Http\Controllers;

use App\Classes\ApiResponseClass;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Http\Resources\EmpresaResource;
use App\Models\Empresa;
use App\Services\EmpresaService;

class EmpresaController extends Controller
{
    private EmpresaService $service;

    public function __construct(EmpresaService $service)
    {
        $this->service = $service;
    }

    public function getAll()
    {
        $empresas = $this->service->getAll();
        return ApiResponseClass::sendResponse(
            EmpresaResource::collection($empresas),
            ''
        );
    }

    public function store(StoreEmpresaRequest $request)
    {
        $novaEmpresa = $this->service->store($request);
        return ApiResponseClass::sendResponse(new EmpresaResource($novaEmpresa), 'Empresa cadastrado com sucesso!');
    }

    public function getById($empresaId)
    {
        $empresa = $this->service->getById($empresaId);
        if (!$empresa) {
            return ApiResponseClass::sendResponse($empresaId,'Erro ao atualizar o empresa!');
        }
        return ApiResponseClass::sendResponse(new EmpresaResource($empresa), '');
    }

    public function update($empresaId, UpdateEmpresaRequest $request)
    {
        $empresa = $this->service->update($empresaId, $request);
        if (!$empresa) {
            return ApiResponseClass::sendResponse($empresaId,'Erro ao atualizar o empresa!');
        }
        return ApiResponseClass::sendResponse('Sucess', 'Empresa editado com sucesso!');
    }

    public function destroy(Empresa $company)
    {
        //
    }
}
