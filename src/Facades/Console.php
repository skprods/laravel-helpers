<?php

namespace SKprods\LaravelHelpers\Facades;

use Illuminate\Support\Facades\Facade;
use SKprods\LaravelHelpers\Handlers\ConsoleOutput;

/**
 * @method static info(string $message)
 * @method static comment(string $message)
 * @method static error(string $message)
 *
 * @see ConsoleOutput
 */
class Console extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'console';
    }
}