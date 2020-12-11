<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementInterface;

interface CashFlowStatementHistoryInterface
{
    /**
     * Get cash flow statement history's cash flow statements
     *
     * @return CashFlowStatementInterface[]
     */
    public function cashFlowStatements();
}
