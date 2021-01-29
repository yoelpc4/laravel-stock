<?php

namespace Yoelpc4\LaravelStock;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Str;
use InvalidArgumentException;
use Yoelpc4\LaravelStock\Contracts\Api\Api;
use Yoelpc4\LaravelStock\Contracts\Api\Factory;
use Yoelpc4\LaravelStock\Contracts\StockProvider;

/**
 * @mixin \Yoelpc4\LaravelStock\Contracts\StockProvider
 */
class StockServiceManager
{
    /**
     * @var Application
     */
    protected $app;

    /**
     * @var array
     */
    protected $stockProviders = [];

    /**
     * StockServiceManager constructor.
     *
     * @param  Application  $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Get stock provider instance by name
     *
     * @param  string|null  $name
     * @return \Yoelpc4\LaravelStock\Contracts\StockProvider
     */
    public function provider(string $name = null)
    {
        $name = $name ?? $this->getDefaultName();

        return $this->stockProviders[$name] = $this->get($name);
    }

    /**
     * Attempt to get the stock provider from local cache
     *
     * @param  string  $name
     * @return StockProvider
     */
    protected function get(string $name)
    {
        return $this->stockProviders[$name] ?? $this->resolve($name);
    }

    /**
     * Resolve the given provider
     *
     * @param  string  $name
     * @return StockProvider
     */
    protected function resolve(string $name)
    {
        $config = $this->getConfig($name);

        if (is_null($config)) {
            throw new InvalidArgumentException("Stock provider {$name} is not defined");
        }

        $stockProviderMethod = 'create'.ucfirst(Str::camel($config['provider']));

        if (method_exists($this, $stockProviderMethod)) {
            return $this->$stockProviderMethod($config);
        } else {
            throw new InvalidArgumentException("Stock provider {$config['provider']} is not supported");
        }
    }

    /**
     * Create an instance of yahoo finance
     *
     * @param  array  $config
     * @return YahooFinance
     * @throws BindingResolutionException
     */
    protected function createYahooFinance(array $config)
    {
        try {
            $api = $this->resolveApi($config['base_url']);
        } catch (BindingResolutionException $e) {
            throw $e;
        }

        return new YahooFinance($api, $config['version']);
    }

    /**
     * Resolve a new api instance
     *
     * @param  string  $baseUrl
     * @return Api
     * @throws BindingResolutionException
     */
    protected function resolveApi(string $baseUrl)
    {
        try {
            return app(Factory::class)->make($baseUrl);
        } catch (BindingResolutionException $e) {
            throw $e;
        }
    }

    /**
     * Get default stock provider name
     *
     * @return string
     */
    protected function getDefaultName()
    {
        return $this->app['config']['stock.default'];
    }

    /**
     * Get the stock provider configuration
     *
     * @param  string  $name
     * @return array
     */
    protected function getConfig(string $name)
    {
        return $this->app['config']["stock.providers.{$name}"];
    }

    /**
     * Dynamically call the default provider method
     *
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->provider()->$method(...$parameters);
    }
}
