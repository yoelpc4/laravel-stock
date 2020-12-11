<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

interface EstimateInterface
{
    /**
     * Get estimate's period
     *
     * @return string|null
     */
    public function period();

    /**
     * Get estimate's growth
     *
     * @return float|null
     */
    public function growth();
}
