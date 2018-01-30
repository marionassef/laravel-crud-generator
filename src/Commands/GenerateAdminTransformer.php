<?php

namespace MarioNassef\LaravelCrudGenerator\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Facades\File;

class GenerateAdminTransformer extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:adminTransformer {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate Admin Transformer';

    /**
     * Create a new command instance.
     *
     * @return void
     */

//    public function __construct()
//    {
//        parent::__construct();
//    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $ClassName = $this->argument('name');
        $this->createTransformer($ClassName);
    }

    protected function createTransformer($ClassName)
    {
        if (!file_exists(app_path('Transformers'))) { mkdir(app_path('Transformers'), 0777, true); }
        $controllerName = $ClassName. 'Controller';
        $repo = $ClassName . 'Repo';
        $transformer = $ClassName . 'Resource';
        $modelName = $ClassName;
        $viewName = $ClassName;
        $path = $this->getPath('Transformers/' . $ClassName . 'Transformer');
        $this->line('Done create Transformer ' . $ClassName );
//        $this->files->put($path, $this->buildTransformer( $name ,  $transformer  , __DIR__.'/stub/transformer.stub'));
        $this->files->put($path, $this->buildClassController($ClassName, $controllerName, $modelName, $viewName, $repo, $transformer, __DIR__ . '/stubs/transformer.stub'));
    }

    protected function buildClassController($ClassName, $controllerName, $modelName, $viewName, $repo, $transformer, $stub)
    {
        $stub = $this->files->get($stub);
        return $this->replace($stub, 'DummyModel', $modelName)
            ->replace($stub, 'DummyView', $viewName)
            ->replace($stub, 'DummyRepo', $repo)
            ->replace($stub, 'DummyTransformer', $transformer)
            ->replaceNamespace($stub, $ClassName)
            ->replaceClass($stub, $controllerName);
    }


    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        return $this->replaceNamespace($stub, $name)->replaceClass($stub, $name);

    }

    protected function getStub()
    {
        return __DIR__.'/stubs/model.stub';
    }

    protected function replace(&$stub, $rep, $name)
    {
        $stub = str_replace(
            [$rep],
            $name,
            $stub
        );

        return $this;
    }

    protected function buildView($name, $stub)
    {
        $stub = $this->files->get($stub);
        return $this->replaceView($stub, 'DummyView', $name);
    }

    protected function replaceView(&$stub, $rep, $name)
    {
        $stub = str_replace(
            [$rep],
            $name,
            $stub
        );
        return $stub;
    }
}
