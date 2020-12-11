<?php

namespace Yoelpc4\LaravelStock\Api;

use GuzzleHttp\Client;
use Psr\Http\Client\ClientExceptionInterface;
use Yoelpc4\LaravelStock\Contracts\Api\Api;
use Yoelpc4\LaravelStock\Contracts\Requestable;

class GuzzleHttpApi implements Api
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * GuzzleHttpApi constructor.
     *
     * @param  string  $baseUrl
     */
    public function __construct(string $baseUrl)
    {
        $this->client = new Client([
            'base_uri' => $baseUrl,
        ]);
    }

    /**
     * @inheritDoc
     */
    public function handle(Requestable $request)
    {
        $options = [
            'query' => $request->query(),
        ];

        try {
            return $this->client->request($request->method(), $request->endpoint(), $options);
        } catch (ClientExceptionInterface $e) {
            throw $e;
        }
    }
}
