<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend;

interface EpsTrendInterface
{
    /**
     * Get eps trend's current
     *
     * @return float|null
     */
    public function current();

    /**
     * Get eps trend's seven days ago
     *
     * @return float|null
     */
    public function sevenDaysAgo();

    /**
     * Get eps trend's thirty days ago
     *
     * @return float|null
     */
    public function thirtyDaysAgo();

    /**
     * Get eps trend's sixty days ago
     *
     * @return float|null
     */
    public function sixtyDaysAgo();

    /**
     * Get eps trend's ninety days ago
     *
     * @return float|null
     */
    public function ninetyDaysAgo();
}
