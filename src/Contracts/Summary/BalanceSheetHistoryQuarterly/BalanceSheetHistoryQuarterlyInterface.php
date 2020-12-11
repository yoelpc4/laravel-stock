<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistoryQuarterly;

use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetStatementInterface;

interface BalanceSheetHistoryQuarterlyInterface
{
    /**
     * Get balance sheet history quarterlies's balance sheet statements
     *
     * @return BalanceSheetStatementInterface[]
     */
    public function balanceSheetStatements();
}
