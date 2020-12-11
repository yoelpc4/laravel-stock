<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Earnings;

interface EarningsChartQuarterlyInterface
{
    /**
     * Get earnings chart quarterlies' date
     *
     * @return string|null
     */
    public function date();

    /**
     * Get earnings chart quarterlies' actual
     *
     * @return float|null
     */
    public function actual();

    /**
     * Get earnings chart quarterlies' estimate
     *
     * @return float|null
     */
    public function estimate();
}
