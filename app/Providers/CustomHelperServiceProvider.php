<?php

namespace App\Providers;

use App\Helpers\CustomHelper;
use Illuminate\Support\ServiceProvider;

class CustomHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // https://laravel.com/docs/11.x/providers#main-content
        $this->app->singleton('CustomHelper', function () {
            return new CustomHelper();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
