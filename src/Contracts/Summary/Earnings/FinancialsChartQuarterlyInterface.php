<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Earnings;

interface FinancialsChartQuarterlyInterface
{
    /**
     * Get financials chart quarterlies's date
     *
     * @return string|null
     */
    public function date();

    /**
     * Get financials chart quarterlies's revenue
     *
     * @return float|null
     */
    public function revenue();

    /**
     * Get financials chart quarterlies's earnings
     *
     * @return float|null
     */
    public function earnings();
}
