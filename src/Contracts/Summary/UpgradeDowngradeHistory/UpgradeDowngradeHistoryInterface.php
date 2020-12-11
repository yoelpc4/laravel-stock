<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory;

interface UpgradeDowngradeHistoryInterface
{
    /**
     * Get upgrade downgrade history's histories
     *
     * @return HistoryInterface[]
     */
    public function histories();
}
