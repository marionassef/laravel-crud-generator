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

        $this->publishes([
            __DIR__ . '/homeView' => resource_path('views'),
        ]);

        $this->publishes([
            __DIR__.'/Helpers' => app_path('Http/Controllers'),
        ]);

        $this->publishes([
            __DIR__.'/Transformers' => app_path('Transformers'),
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

    public function registerHelpers()
    {
        // Load the helpers in app/Http/helpers.php
        if (file_exists($file = app_path('Http/Controller/Helper.php')))
        {
            require $file;
        }

        if (file_exists($file = app_path('Http/Controller/MassageHelper.php')))
        {
            require $file;
        }
    }

}
