<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Earnings;

interface EarningsChartInterface
{
    /**
     * Get earnings chart's earnings chart quarterlies
     *
     * @return EarningsChartQuarterlyInterface[]
     */
    public function quarterlies();

    /**
     * Get earnings chart's current quarter estimate
     *
     * @return float|null
     */
    public function currentQuarterEstimate();

    /**
     * Get earnings chart's current quarter estimate date
     *
     * @return string|null
     */
    public function currentQuarterEstimateDate();

    /**
     * Get earnings chart's current quarter estimate year
     *
     * @return int|null
     */
    public function currentQuarterEstimateYear();

    /**
     * Get earnings chart's earnings dates
     *
     * @return array
     */
    public function earningsDates();
}
