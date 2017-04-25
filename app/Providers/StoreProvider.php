<?php

namespace App\Providers;

use App\Store\Cart;
use Illuminate\Support\ServiceProvider;

class StoreProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('App\Store\Cart', function($app) {
            return new Cart($app->make('App\Store\ModelResolver'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
