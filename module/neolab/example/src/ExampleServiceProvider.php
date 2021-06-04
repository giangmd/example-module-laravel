<?php

namespace Neolab\Example;

use Illuminate\Support\ServiceProvider;
use Neolab\Example\Commands\MakeAction;
use Neolab\Example\Commands\MakeTask;

class ExampleServiceProvider extends ServiceProvider
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
                MakeAction::class,
                MakeTask::class
            ]);
        }
    }
}
