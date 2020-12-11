<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory;

interface EarningsHistoryInterface
{
    /**
     * Get earning history's histories
     *
     * @return HistoryInterface[]
     */
    public function histories();
}
