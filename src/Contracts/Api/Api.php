<?php

namespace Yoelpc4\LaravelStock\Contracts\Api;

use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use Yoelpc4\LaravelStock\Contracts\Requestable;

interface Api
{
    /**
     * Handle an outgoing request.
     *
     * @param  Requestable  $request
     * @return ResponseInterface
     * @throws ClientExceptionInterface
     */
    public function handle(Requestable $request);
}
