<?php
/**
 * Created by PhpStorm.
 * User: harbr
 * Date: 02/02/18
 * Time: 02:53 م
 */
use MarioNassef\LaravelCrudGenerator\LaravelCrudGeneratorServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return MarioNassef\LaravelCrudGenerator\LaravelCrudGeneratorServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [LaravelCrudGeneratorServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
        ];
    }
}
