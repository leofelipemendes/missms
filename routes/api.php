<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class,'auth']);
Route::get('/grupos',[GrupoController::class,'index']);
Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', [UserController::class,'index']);

        Route::get('/empresa/getAll', [EmpresaController::class,'getAll']);
        Route::get('/empresa/{id}', [EmpresaController::class,'getById']);
        Route::post('/empresa', [EmpresaController::class,'store']);
        Route::put('/empresa/{id}', [EmpresaController::class,'update']);

        Route::get('/modulo/getAll', [ModuloController::class,'getAll']);
        Route::get('/modulo/{id}', [ModuloController::class,'getById']);
        Route::post('/modulo', [ModuloController::class,'store']);
        Route::put('/modulo/{id}', [ModuloController::class,'update']);

});

