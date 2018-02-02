<?php

namespace MarioNassef\LaravelCrudGenerator;

use Illuminate\Support\ServiceProvider;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminApiController;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminViews;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminRoutes;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminTransformer;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminModel;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminController;
use MarioNassef\LaravelCrudGenerator\Commands\GenerateAdminModule;

class LaravelCrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateAdminModule::class,
                GenerateAdminController::class,
                GenerateAdminModel::class,
                GenerateAdminTransformer::class,
                GenerateAdminRoutes::class,
                GenerateAdminApiController::class,
                GenerateAdminViews::class,
            ]);
        }

        $this->publishes([
            __DIR__.'/assets' => public_path('assets'),
        ], 'public');

        $this->publishes([
            __DIR__.'/common' => resource_path('views/common'),
        ]);
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
