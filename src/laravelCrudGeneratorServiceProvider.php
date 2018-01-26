<?php

namespace marionassef\LaravelCrudGenerator;

use Illuminate\Support\ServiceProvider;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminApiController;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminViews;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminRoutes;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminTransformer;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminModel;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminController;
use marionassef\LaravelCrudGenerator\Commands\GenerateAdminModule;


class laravelCrudGeneratorServiceProvider extends ServiceProvider
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
