<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend;

interface EarningsEstimateInterface
{
    /**
     * Get earnings estimate's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get earnings estimate's low
     *
     * @return float|null
     */
    public function low();

    /**
     * Get earnings estimate's high
     *
     * @return float|null
     */
    public function high();

    /**
     * Get earnings estimate's year ago eps
     *
     * @return float|null
     */
    public function yearAgoEps();

    /**
     * Get earnings estimate's number of analysts
     *
     * @return int|null
     */
    public function numberOfAnalysts();

    /**
     * Get earnings estimate's growth (%)
     *
     * @return float|null
     */
    public function growth();
}
