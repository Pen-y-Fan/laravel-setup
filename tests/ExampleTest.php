<?php

namespace PenYFan\LaravelSetup\Tests;

use Orchestra\Testbench\TestCase;
use PenYFan\LaravelSetup\LaravelSetupServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelSetupServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
