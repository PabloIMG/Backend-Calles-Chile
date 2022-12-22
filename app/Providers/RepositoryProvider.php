<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\DataRepositoryInterface;
use App\Repositories\DataRepository;

use App\Repositories\RegionRepositoryInterface;
use App\Repositories\RegionRepository;

use App\Repositories\ProvinciaRepositoryInterface;
use App\Repositories\ProvinciaRepository;

use App\Repositories\CiudadRepositoryInterface;
use App\Repositories\CiudadRepository;

use App\Repositories\CalleRepositoryInterface;
use App\Repositories\CalleRepository;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DataRepositoryInterface::class, DataRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
