<?php

namespace LaravelLatam\Emnify\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelLatam\Emnify\Emnify
 */
class Emnify extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelLatam\Emnify\Emnify::class;
    }
}
