<?php

namespace MarioNassef\LaravelCrudGenerator\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Facades\File;

class GenerateAdminModule extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:adminModule {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate admin module';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function handle()
    {
        $ClassName = $this->argument('name');
        $this->callSilent('generate:adminModel', [
            'name' => $ClassName
        ]);
        $this->callSilent('generate:adminController', [
            'name' => $ClassName
        ]);
        $this->callSilent('generate:adminTransformer', [
            'name' => $ClassName
        ]);
        $this->callSilent('generate:adminViews', [
            'name' => $ClassName
        ]);
        $this->callSilent('generate:adminRoutes', [
            'name' => $ClassName
        ]);
        $this->callSilent('generate:apiController', [
            'name' => $ClassName
        ]);

        $this->callSilent('make:migration', [
            'name' => $ClassName
        ]);
        $this->line('Done create Admin module');

    }

    protected function getStub()
    {
        return __DIR__ . '/stubs/model.stub';
    }
}
