<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend;

interface RecommendationTrendInterface
{
    /**
     * Get recommendation trend's trends
     *
     * @return TrendInterface[]
     */
    public function trends();
}
