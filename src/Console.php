<?php

namespace SKprods\LaravelHelpers;

use Illuminate\Support\Facades\Facade;
use SKprods\LaravelHelpers\Support\ConsoleOutput;

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