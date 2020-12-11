<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory;

interface HistoryInterface
{
    /**
     * Get history's period
     *
     * @return string|null
     */
    public function period();

    /**
     * Get history's quarter
     *
     * @return string|null
     */
    public function quarter();

    /**
     * Get history's eps actual
     *
     * @return float|null
     */
    public function epsActual();

    /**
     * Get history's eps estimate
     *
     * @return float|null
     */
    public function epsEstimate();

    /**
     * Get history's eps difference
     *
     * @return float|null
     */
    public function epsDifference();

    /**
     * Get history's surprise percent (%)
     *
     * @return float|null
     */
    public function surprisePercent();
}
