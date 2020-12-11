<?php

namespace Yoelpc4\LaravelStock\Contracts\Api;

interface Factory
{
    /**
     * Create a new api instance
     *
     * @param  string  $baseUrl
     * @return Api
     */
    public function make(string $baseUrl);
}
