<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend;

interface TrendInterface
{
    /**
     * Get trend's period
     *
     * @return string|null
     */
    public function period();

    /**
     * Get trend's strong buy
     *
     * @return int|null
     */
    public function strongBuy();

    /**
     * Get trend's buy
     *
     * @return int|null
     */
    public function buy();

    /**
     * Get trend's hold
     *
     * @return int|null
     */
    public function hold();

    /**
     * Get trend's sell
     *
     * @return int|null
     */
    public function sell();

    /**
     * Get trend's strong sell
     *
     * @return int|null
     */
    public function strongSell();
}
