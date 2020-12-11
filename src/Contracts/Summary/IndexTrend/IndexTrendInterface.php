<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\IndexTrend;

use Yoelpc4\LaravelStock\Contracts\Summary\EstimateInterface;

interface IndexTrendInterface
{
    /**
     * Get index trend's symbol
     *
     * @return string|null
     */
    public function symbol();

    /**
     * Get index trend's pe ratio
     *
     * @return float|null
     */
    public function peRatio();

    /**
     * Get index trend's peg ratio
     *
     * @return float|null
     */
    public function pegRatio();

    /**
     * Get index trend's estimates
     *
     * @return EstimateInterface[]
     */
    public function estimates();
}
