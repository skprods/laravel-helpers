<?php

namespace SKprods\LaravelHelpers\Providers;

use Illuminate\Support\ServiceProvider;
use SKprods\LaravelHelpers\Handlers\ConsoleOutput;

class HelpersServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('console', function () {
            return new ConsoleOutput();
        });
    }
}