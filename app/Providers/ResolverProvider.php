<?php

namespace App\Providers;

use App\Repositories\Frontend\Store\CategoryRepository;
use App\Repositories\Frontend\Store\PackageRepository;
use App\Repositories\Frontend\Store\ProductRepository;
use App\Repositories\Frontend\Store\StartupProductRepository;
use App\Store\ModelResolver;
use Illuminate\Support\ServiceProvider;

class ResolverProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $modelResolver = new ModelResolver(
                             new PackageRepository(),
                             new ProductRepository(),
                             new StartupProductRepository(),
                             new CategoryRepository()
                         );


        $this->app->singleton('App\Store\ModelResolver', function($app) use ($modelResolver) {
            return $modelResolver;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
