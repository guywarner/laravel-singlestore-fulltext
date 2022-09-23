<?php

namespace Guywarner\LaravelSinglestoreFulltext\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Guywarner\LaravelSinglestoreFulltext\LaravelSinglestoreFulltext
 */
class LaravelSinglestoreFulltext extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Guywarner\LaravelSinglestoreFulltext\LaravelSinglestoreFulltext::class;
    }
}
