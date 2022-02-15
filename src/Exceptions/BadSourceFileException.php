<?php

namespace SKprods\LaravelHelpers\Exceptions;

use Exception;

class BadSourceFileException extends Exception
{
    public function __construct(string $path)
    {
        parent::__construct("Source file [$path] doesn't exists");
    }
}