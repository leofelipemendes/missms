<?php

namespace App\Providers;

use App\Interfaces\ModuloRepositoryInterface;
use App\Interfaces\PerfilEmpresaRepositoryInterface;
use App\Interfaces\EmpresaRepositoryInterface;
use App\Interfaces\PerfilUsuarioRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\ModuloRepository;
use App\Repositories\PerfilEmpresaRepository;
use App\Repositories\EmpresaRepository;
use App\Repositories\PerfilUsuarioRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(EmpresaRepositoryInterface::class, EmpresaRepository::class);
        $this->app->bind(PerfilEmpresaRepositoryInterface::class, PerfilEmpresaRepository::class);
        $this->app->bind(PerfilUsuarioRepositoryInterface::class, PerfilUsuarioRepository::class);
        $this->app->bind(ModuloRepositoryInterface::class, ModuloRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
