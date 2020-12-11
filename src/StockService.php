<?php

namespace Yoelpc4\LaravelStock;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Yoelpc4\LaravelStock\Contracts\StockProvider provider(string $name = null)
 * @method static \Yoelpc4\LaravelStock\Contracts\Summary\SummaryInterface summary(string $symbol)
 *
 * @see \Yoelpc4\LaravelStock\StockServiceManager
 * @see \Yoelpc4\LaravelStock\Contracts\StockProvider
 */
class StockService extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'stock_service';
    }
}
