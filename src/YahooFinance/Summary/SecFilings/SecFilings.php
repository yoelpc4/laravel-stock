<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\SecFilings;

use Yoelpc4\LaravelStock\Contracts\Summary\SecFillings\SecFilingsInterface;

class SecFilings implements SecFilingsInterface
{
    /**
     * @var Filing[]
     */
    protected $filings;

    /**
     * SecFilings constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->filings = array_map(function (array $data) {
            return new Filing($data);
        }, $data['filings'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function filings()
    {
        return $this->filings;
    }
}
