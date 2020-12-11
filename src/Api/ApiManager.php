<?php

namespace Yoelpc4\LaravelStock\Api;

use Yoelpc4\LaravelStock\Contracts\Api\Factory;

class ApiManager implements Factory
{
    /**
     * @inheritDoc
     */
    public function make(string $baseUrl)
    {
        return new GuzzleHttpApi($baseUrl);
    }
}
