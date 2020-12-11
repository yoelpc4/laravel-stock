<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistoryQuarterly;

use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementInterface;

interface IncomeStatementHistoryQuarterlyInterface
{
    /**
     * Get income statement history quarterlies's income statement
     *
     * @return IncomeStatementInterface[]
     */
    public function incomeStatements();
}
