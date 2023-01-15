<?php

namespace App\Providers;

use App\Interfaces\ProjectRepositoryInterface;
use App\Repositories\ProjectRepository;
use App\Interfaces\TodoRepositoryInterface;
use App\Repositories\TodoRepository;
use App\Interfaces\PhaseRepositoryInterface;
use App\Repositories\PhaseRepository;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProjectRepositoryInterface::class, ProjectRepository::class);
        $this->app->bind(TodoRepositoryInterface::class, TodoRepository::class);
        $this->app->bind(PhaseRepositoryInterface::class, PhaseRepository::class);
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
