<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\IncomeStatementHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistory\IncomeStatementHistoryInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\IncomeStatement;

class IncomeStatementHistory implements IncomeStatementHistoryInterface
{
    /**
     * @var IncomeStatement[]
     */
    protected $incomeStatements;

    /**
     * IncomeStatementHistoryQuarterly constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->incomeStatements = array_map(function (array $data) {
            return new IncomeStatement($data);
        }, $data['incomeStatementHistory'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function incomeStatements()
    {
        return $this->incomeStatements;
    }
}
