<?php

namespace Yoelpc4\LaravelStock\Contracts;

interface Requestable
{
    /**
     * Get requestable method
     *
     * @return string
     */
    public function method();

    /**
     * Get requestable endpoint
     *
     * @return string
     */
    public function endpoint();

    /**
     * Get requestable query
     *
     * @return array
     */
    public function query();
}
