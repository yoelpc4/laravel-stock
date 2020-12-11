<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\RecommendationTrend;

use Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\RecommendationTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\TrendInterface;

class RecommendationTrend implements RecommendationTrendInterface
{
    /**
     * @var TrendInterface[]
     */
    protected $trends;

    /**
     * RecommendationTrend constructor.
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
