<?php

namespace Akkurate\LaravelCarbonIcons;

use Akkurate\LaravelCarbonIcons\Console\Commands\CarbonIconsGenerate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

/**
 * Access service provider
 *
 */
class LaravelCarbonIconsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/dev.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'carbon-icons');

        $this->publishes([
            __DIR__ . '/../config/laravel-carbon-icons.php' => config_path('laravel-carbon-icons.php')
        ], 'config');

        $this->publishes([
            __DIR__ . '/../resources/js/production/es' => resource_path('js/vendor/icons'),
        ], 'icons');

        if ($this->app->runningInConsole()) {
            $this->commands([
                CarbonIconsGenerate::class,
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/laravel-carbon-icons.php', 'laravel-carbon-icons'
        );
    }
}
