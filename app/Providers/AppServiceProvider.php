<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('App\Repositories\Interfaces\RegisterInterface', 'App\Repositories\RegisterRepository');

        $this->app->bind('App\Repositories\Interfaces\PembicaraInterface', 'App\Repositories\PembicaraRepository');

        $this->app->bind('App\Repositories\Interfaces\SetupInterface', 'App\Repositories\SetupRepository');
    }
}
