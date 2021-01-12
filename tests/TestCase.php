<?php

namespace Akkurate\LaravelCarbonIcons\Tests;

use Akkurate\LaravelBackComponents\LaravelBackComponentsServiceProvider;
use Akkurate\LaravelCarbonIcons\LaravelCarbonIconsServiceProvider;
use Akkurate\LaravelCore\LaravelCoreServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [
            LaravelCarbonIconsServiceProvider::class,
            LaravelBackComponentsServiceProvider::class,
            LaravelCoreServiceProvider::class
        ];
    }
}
