<?php

namespace PenYFan\LaravelSetup;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PenYFan\LaravelSetup\Skeleton\SkeletonClass
 */
class LaravelSetupFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-setup';
    }
}
