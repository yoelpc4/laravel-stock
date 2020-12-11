<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\IncomeStatementHistoryQuarterly;

use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistoryQuarterly\IncomeStatementHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\IncomeStatement;

class IncomeStatementHistoryQuarterly implements IncomeStatementHistoryQuarterlyInterface
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
