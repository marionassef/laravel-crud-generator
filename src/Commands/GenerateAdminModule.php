<?php

namespace marionassef\LaravelCrudGenerator\Commands;

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
    protected $description = 'will tell u later punk';

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
//        $this->createModel($ClassName);
        $this->callSilent('generate:adminModel', [
            'name' => $ClassName
        ]);
        $this->callSilent('generate:adminController', [
            'name' => $ClassName
        ]);
//        $this->createController($ClassName);
//        $this->callSilent('generate:adminRepository', [
//            'name' => $ClassName
//        ]);
//        $this->createRepo($ClassName);
        $this->callSilent('generate:adminTransformer', [
            'name' => $ClassName
        ]);

//        $this->createTransformer($ClassName);
//        $this->callSilent('generate:adminViews', [
//            'name' => $ClassName
//        ]);
//        $this->createViews($ClassName);
        $this->callSilent('generate:adminViews', [
            'name' => $ClassName
        ]);
//        $this->appendRoutes($ClassName);
        $this->callSilent('generate:adminRoutes', [
            'name' => $ClassName
        ]);

        $this->callSilent('generate:apiController', [
            'name' => $ClassName
        ]);
        $this->line('Done create Admin module');

    }

    protected function createModel($ClassName)
    {
        $path = $this->getPath($ClassName);
        $this->line('Done create Model ' . $ClassName . ' .');
        $this->files->put($path, $this->buildClass($ClassName));
    }

    protected function createController($ClassName)
    {
        $controllerName = $ClassName. 'Controller';
        $repo =$ClassName . 'Repo';
        $transformer = $ClassName . 'Resource';
        $modelName = $ClassName;
        $viewName = $ClassName;
        $path = $this->getPath('Http/Controllers/' . $ClassName . 'Controller');
        $this->line('Done create Controller' . $ClassName . 'Controller .');
        $this->files->put($path, $this->buildClassController($ClassName, $controllerName, $modelName, $viewName, $repo, $transformer, __DIR__ . '/stubs/controller.stub' . ''));

    }

    protected function createRepo($ClassName)
    {
        if (!file_exists(app_path('Repos'))) { mkdir(app_path('Repos'), 0777, true); }
        $controllerName = $ClassName. 'Controller';
        $repo = $ClassName . 'Repo';
        $transformer = $ClassName . 'Resource';
        $modelName = $ClassName;
        $viewName = $ClassName;
        $path = $this->getPath('Repos/' . $ClassName . 'Repo');
        $this->line('Done create Controller  at Application Transformer admin ' .$ClassName . 'Repo .');
        $this->files->put($path, $this->buildClassController($ClassName, $controllerName,
            $modelName, $viewName, $repo, $transformer, __DIR__ . '/stubs/repo.stub'));
    }

    protected function createTransformer($ClassName)
    {
        if (!file_exists(app_path('Http/Resources'))) { mkdir(app_path('Http/Resources'), 0777, true); }
        $controllerName = $ClassName. 'Controller';
        $repo = $ClassName . 'Repo';
        $transformer = $ClassName . 'Resource';
        $modelName = $ClassName;
        $viewName = $ClassName;
        $path = $this->getPath('Http/Resources/' . $ClassName . 'Resource');
        $this->line('Done create Resource ' . $ClassName );
//        $this->files->put($path, $this->buildTransformer( $name ,  $transformer  , __DIR__.'/stub/transformer.stub'));
        $this->files->put($path, $this->buildClassController($ClassName, $controllerName, $modelName, $viewName, $repo, $transformer, __DIR__ . '/stubs/transformer.stub'));
    }

    protected function createViews($ClassName)
    {
        $path = base_path('resources/views/' . $ClassName);

        if (!file_exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        $this->CreateOnView('index',$ClassName);
        $this->CreateOnView('edit',$ClassName);
        $this->CreateOnView('view',$ClassName);
    }

    protected function appendRoutes($ClassName)
    {
        $path = base_path('routes/web.php');
        $this->line('Done append routes .');
        $this->files->append($path, $this->buildRoute($ClassName, __DIR__ . '/stubs/routes.stub'));
    }


    protected function CreateOnView($view,$ClassName)
    {
        $path = base_path('resources/views/' . $ClassName . '/
        ' . $view . '.blade.php');
        $this->line('Done create view .');
        $this->files->put($path, $this->buildView($ClassName, __DIR__ . '/stubs/' . $view . '.stub'));
    }

    protected function buildRoute($ClassName, $stub)
    {
        $stub = $this->files->get($stub);
        return $this->replace($stub, 'DummyRoute', $ClassName)
            ->replaceView($stub, 'DummyView', $ClassName);
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
