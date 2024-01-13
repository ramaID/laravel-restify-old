<?php

namespace CodeWeaver\LaravelRestify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CodeWeaver\LaravelRestify\LaravelRestify
 */
class LaravelRestify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CodeWeaver\LaravelRestify\LaravelRestify::class;
    }
}
