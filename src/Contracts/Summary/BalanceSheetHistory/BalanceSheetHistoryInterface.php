<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetStatementInterface;

interface BalanceSheetHistoryInterface
{
    /**
     * Get balance sheet history's balance sheet statements
     *
     * @return BalanceSheetStatementInterface[]
     */
    public function balanceSheetStatements();
}
