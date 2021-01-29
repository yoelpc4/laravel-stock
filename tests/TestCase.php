<?php

namespace Yoelpc4\LaravelStock\Tests;

use Illuminate\Foundation\Bootstrap\LoadEnvironmentVariables;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Yoelpc4\LaravelStock\StockService;
use Yoelpc4\LaravelStock\StockServiceProvider;

abstract class TestCase extends OrchestraTestCase
{
    /**
     * @inheritDoc
     */
    protected function getPackageProviders($app)
    {
        return [
            StockServiceProvider::class,
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getPackageAliases($app)
    {
        return [
            'StockService' => StockService::class,
        ];
    }

    /**
     * @inheritDoc
     */
    protected function getEnvironmentSetUp($app)
    {
        $app->useEnvironmentPath(__DIR__.'/../../laravel-stock')
            ->loadEnvironmentFrom('.env.testing')
            ->bootstrapWith([
                LoadEnvironmentVariables::class,
            ]);
    }
}
