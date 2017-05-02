<?php

namespace App\Providers;

use App\Scrapers\DefaultScraper;
use Goutte\Client;
use Illuminate\Support\ServiceProvider;

class ScraperProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton('App\Scraper\DefaultScraper', function($app) {
            return new DefaultScraper(new Client());
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
