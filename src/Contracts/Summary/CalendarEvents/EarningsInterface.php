<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents;

interface EarningsInterface
{
    /**
     * Get earnings' earning dates
     *
     * @return array
     */
    public function earningsDates();

    /**
     * Get earnings' earning average
     *
     * @return float|null
     */
    public function earningsAverage();

    /**
     * Get earnings' earning low
     *
     * @return float|null
     */
    public function earningsLow();

    /**
     * Get earnings' earning high
     *
     * @return float|null
     */
    public function earningsHigh();

    /**
     * Get earnings' revenue average
     *
     * @return float|null
     */
    public function revenueAverage();

    /**
     * Get earnings' revenue low
     *
     * @return float|null
     */
    public function revenueLow();

    /**
     * Get earnings' revenue high
     *
     * @return float|null
     */
    public function revenueHigh();
}
