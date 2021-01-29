<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\PageViews;

interface PageViewsInterface
{
    /**
     * Get page views' short term trend
     *
     * @return string|null
     */
    public function shortTermTrend();

    /**
     * Get page views' mid term trend
     *
     * @return string|null
     */
    public function midTermTrend();

    /**
     * Get page views' long term trend
     *
     * @return string|null
     */
    public function longTermTrend();
}
