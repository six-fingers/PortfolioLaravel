<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\SkillRepositoryInterface;
use App\Repositories\SkillRepository;

class SkillServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SkillRepositoryInterface::class, SkillRepository::class);
    }
}
