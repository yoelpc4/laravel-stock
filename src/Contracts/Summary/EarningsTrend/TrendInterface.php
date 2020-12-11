<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend;

interface TrendInterface
{
    /**
     * Get trend's period
     *
     * @return string|null
     */
    public function period();

    /**
     * Get trend's end date
     *
     * @return string|null
     */
    public function endDate();

    /**
     * Get trend's growth (%)
     *
     * @return float|null
     */
    public function growth();

    /**
     * Get trend's earning estimate
     *
     * @return EarningsEstimateInterface|null
     */
    public function earningsEstimate();

    /**
     * Get trend's revenue estimate
     *
     * @return RevenueEstimateInterface|null
     */
    public function revenueEstimate();

    /**
     * Get trend's eps trend
     *
     * @return EpsTrendInterface|null
     */
    public function epsTrend();

    /**
     * Get trend's eps revisions
     *
     * @return EpsRevisionsInterface|null
     */
    public function epsRevisions();
}
