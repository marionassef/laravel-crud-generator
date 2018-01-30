<?php

namespace MarioNassef\LaravelCrudGenerator\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Illuminate\Support\Facades\File;

class GenerateAdminModel extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:adminModel {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'generate Admin Model';

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
        $this->createModel($ClassName);

        }

    protected function createModel($ClassName)
    {
        $path = $this->getPath($ClassName);
        $this->line('Done create Model ' . $ClassName . ' .');
        $this->files->put($path, $this->buildClass($ClassName));
    }

    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());
        $this->replace( $stub, 'DummyModel',lcfirst($name));
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
