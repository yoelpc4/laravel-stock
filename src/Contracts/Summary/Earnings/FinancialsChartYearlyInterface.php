<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Earnings;

interface FinancialsChartYearlyInterface
{
    /**
     * Get financials chart yearlies' date
     *
     * @return int|null
     */
    public function date();

    /**
     * Get financials chart yearlies' revenue
     *
     * @return float|null
     */
    public function revenue();

    /**
     * Get financials chart yearlies' earnings
     *
     * @return float|null
     */
    public function earnings();
}
