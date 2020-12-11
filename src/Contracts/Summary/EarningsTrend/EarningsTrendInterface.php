<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend;

interface EarningsTrendInterface
{
    /**
     * Get earnings trend's trends
     *
     * @return TrendInterface[]
     */
    public function trends();
}
