<?php

namespace Yoelpc4\LaravelStock;

use Illuminate\Validation\ValidationException;
use Psr\Http\Client\ClientExceptionInterface;
use Yoelpc4\LaravelStock\Concerns\Response;
use Yoelpc4\LaravelStock\Concerns\Validation;
use Yoelpc4\LaravelStock\Contracts\Api\Api;
use Yoelpc4\LaravelStock\Contracts\StockProvider;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Summary;
use Yoelpc4\LaravelStock\YahooFinance\Summary\SummaryRequest;

class YahooFinance implements StockProvider
{
    use Response, Validation;

    /**
     * @var Api
     */
    protected $api;

    /**
     * YahooFinance constructor.
     *
     * @param  Api  $api
     */
    public function __construct(Api $api)
    {
        $this->api = $api;
    }

    /**
     * @inheritDoc
     */
    public function summary(string $symbol)
    {
        $request = new SummaryRequest($symbol);

        try {
            $this->validate($request);
        } catch (ValidationException $e) {
            throw $e;
        }

        try {
            $response = $this->api->handle($request);
        } catch (ClientExceptionInterface $e) {
            throw $e;
        }

        $data = $this->getResponseData($response);

        return new Summary($data);
    }
}
