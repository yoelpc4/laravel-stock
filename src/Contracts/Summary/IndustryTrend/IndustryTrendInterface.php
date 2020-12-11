<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\IndustryTrend;

use Yoelpc4\LaravelStock\Contracts\Summary\EstimateInterface;

interface IndustryTrendInterface
{
    /**
     * Get industry trend's symbol
     *
     * @return string|null
     */
    public function symbol();

    /**
     * Get industry trend's pe ratio
     *
     * @return float|null
     */
    public function peRatio();

    /**
     * Get industry trend's peg ratio
     *
     * @return float|null
     */
    public function pegRatio();

    /**
     * Get industry trend's estimates
     *
     * @return EstimateInterface[]
     */
    public function estimates();
}
