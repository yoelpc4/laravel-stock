<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\SectorTrend;

use Yoelpc4\LaravelStock\Contracts\Summary\EstimateInterface;

interface SectorTrendInterface
{
    /**
     * Get sector trend's symbol
     *
     * @return string|null
     */
    public function symbol();

    /**
     * Get sector trend's pe ratio
     *
     * @return float|null
     */
    public function peRatio();

    /**
     * Get sector trend's peg ratio
     *
     * @return float|null
     */
    public function pegRatio();

    /**
     * Get sector trend's estimates
     *
     * @return EstimateInterface[]
     */
    public function estimates();
}
