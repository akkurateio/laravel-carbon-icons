<?php

if (!function_exists('icons_path')) {
    /**
     * Get the packages path.
     *
     * @param string $package
     * @param string $path
     * @return string
     */
    function icons_path($package, $path = '')
    {
        return app_path(config('laravel-crud-generator.path')."$package/$path");
    }
}
