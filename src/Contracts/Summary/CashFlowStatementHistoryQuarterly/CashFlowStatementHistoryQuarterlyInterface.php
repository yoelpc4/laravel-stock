<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistoryQuarterly;

use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementInterface;

interface CashFlowStatementHistoryQuarterlyInterface
{
    /**
     * Get cash flow statement history's cash flow statements
     *
     * @return CashFlowStatementInterface[]
     */
    public function cashFlowStatements();
}
