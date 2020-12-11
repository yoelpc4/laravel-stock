<?php

namespace Yoelpc4\LaravelStock\Contracts;

use Illuminate\Validation\ValidationException;
use Psr\Http\Client\ClientExceptionInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Summary;

interface StockProvider
{
    /**
     * Get stock summary
     *
     * @param  string  $symbol
     * @return Summary
     * @throws ValidationException
     * @throws ClientExceptionInterface
     */
    public function summary(string $symbol);
}
