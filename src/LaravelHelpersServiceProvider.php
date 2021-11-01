<?php

namespace SKprods\LaravelHelpers;

use Illuminate\Support\ServiceProvider;
use SKprods\LaravelHelpers\Support\ConsoleOutput;

class LaravelHelpersServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('console', function () {
            return new ConsoleOutput();
        });
    }

}