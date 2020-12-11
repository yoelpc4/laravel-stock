<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend;

interface RevenueEstimateInterface
{
    /**
     * Get revenue estimate's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get revenue estimate's low
     *
     * @return float|null
     */
    public function low();

    /**
     * Get revenue estimate's high
     *
     * @return float|null
     */
    public function high();

    /**
     * Get revenue estimate's year ago revenue
     *
     * @return float|null
     */
    public function yearAgoRevenue();

    /**
     * Get revenue estimate's number of analysts
     *
     * @return int|null
     */
    public function numberOfAnalysts();

    /**
     * Get revenue estimate's growth (%)
     *
     * @return float|null
     */
    public function growth();
}
