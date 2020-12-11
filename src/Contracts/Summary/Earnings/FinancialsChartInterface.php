<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Earnings;

interface FinancialsChartInterface
{
    /**
     * Get financials chart's yearlies
     *
     * @return FinancialsChartYearlyInterface[]
     */
    public function yearlies();

    /**
     * Get financials chart's quarterlies
     *
     * @return FinancialsChartQuarterlyInterface[]
     */
    public function quarterlies();
}
