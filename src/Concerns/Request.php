<?php

namespace Yoelpc4\LaravelStock\Concerns;

trait Request
{
    /**
     * Get request's method
     *
     * @return string
     */
    public function method()
    {
        return $this->method;
    }

    /**
     * Get request's endpoint
     *
     * @return string
     */
    public function endpoint()
    {
        return $this->endpoint;
    }

    /**
     * Get request's query
     *
     * @return array
     */
    public function query()
    {
        return [];
    }
}
