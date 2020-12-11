<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementInterface;

interface IncomeStatementHistoryInterface
{
    /**
     * Get income statement history's income statement
     *
     * @return IncomeStatementInterface[]
     */
    public function incomeStatements();
}
