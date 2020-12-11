<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Earnings;

interface EarningsInterface
{
    /**
     * Get earnings' earnings chart
     *
     * @return EarningsChartInterface[]
     */
    public function earningsChart();

    /**
     * Get earnings' financials chart
     *
     * @return FinancialsChartInterface[]
     */
    public function financialsChart();

    /**
     * Get earnings' financial currency
     *
     * @return string|null
     */
    public function financialCurrency();
}
