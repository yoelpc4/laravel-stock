<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\MajorHoldersBreakdown;

interface MajorHoldersBreakdownInterface
{
    /**
     * Get major holders breakdown's insiders percent held (%)
     *
     * @return float|null
     */
    public function insidersPercentHeld();

    /**
     * Get major holders breakdown's institutions percent held (%)
     *
     * @return float|null
     */
    public function institutionsPercentHeld();

    /**
     * Get major holders breakdown's institutions float percent held (%)
     *
     * @return float|null
     */
    public function institutionsFloatPercentHeld();

    /**
     * Get major holders breakdown's institutions count
     *
     * @return int|null
     */
    public function institutionsCount();
}
