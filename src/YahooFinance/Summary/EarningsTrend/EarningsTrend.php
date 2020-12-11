<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend;

use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EarningsTrendInterface;

class EarningsTrend implements EarningsTrendInterface
{
    /**
     * @var Trend[]
     */
    protected $trends;

    /**
     * EarningsTrend constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->trends = array_map(function (array $data) {
            return new Trend($data);
        }, $data['trend'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function trends()
    {
        return $this->trends;
    }
}
