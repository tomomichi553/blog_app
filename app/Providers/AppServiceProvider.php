<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
            Paginator::useBootstrap();
            \URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS','on');
            Schema::defaultStringLength(191);
    }
}
