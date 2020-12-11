<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\CashFlowStatementHistoryQuarterly;

use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistoryQuarterly\CashFlowStatementHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\CashFlowStatement;

class CashFlowStatementHistoryQuarterly implements CashFlowStatementHistoryQuarterlyInterface
{
    /**
     * @var CashFlowStatement[]
     */
    protected $cashFlowStatements;

    /**
     * CashFlowStatementHistoryQuarterly constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->cashFlowStatements = array_map(function (array $data) {
            return new CashFlowStatement($data);
        }, $data['cashflowStatements'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function cashFlowStatements()
    {
        return $this->cashFlowStatements;
    }
}
