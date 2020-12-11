<?php

namespace Yoelpc4\LaravelStock\Concerns;

use Psr\Http\Message\ResponseInterface;

trait Response
{
    /**
     * Convert response's contents to array data
     *
     * @param  ResponseInterface  $response
     * @return array
     */
    protected function getResponseData(ResponseInterface $response)
    {
        $contents = $response->getBody()->getContents();

        return json_decode($contents, true);
    }
}
