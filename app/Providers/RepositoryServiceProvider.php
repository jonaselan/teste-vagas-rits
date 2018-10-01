<?php

namespace App\Providers;

use App\Repositories\VacancyRepository;
use App\Repositories\VacancyRepositoryEloquent;
use App\Repositories\CandidateRepository;
use App\Repositories\CandidateRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VacancyRepository::class, VacancyRepositoryEloquent::class);
        $this->app->bind(CandidateRepository::class, CandidateRepositoryEloquent::class);
        //:end-bindings:
    }
}
