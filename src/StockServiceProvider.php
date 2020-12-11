<?php

namespace Yoelpc4\LaravelStock;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Yoelpc4\LaravelStock\Api\ApiManager;
use Yoelpc4\LaravelStock\Contracts\Api\Factory;

class StockServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/stock.php', 'stock');

        $this->app->singleton(Factory::class, ApiManager::class);

        $this->app->singleton('stock_service', function (Application $app) {
            return new StockServiceManager($app);
        });

        $this->app->singleton('stock_service.provider', function (Application $app) {
            return $app['stock_service']->provider();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laravel-stock');

        $this->publishes([
            __DIR__.'/../config/stock.php' => config_path('stock.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/laravel-stock'),
        ], 'resources');
    }
}
