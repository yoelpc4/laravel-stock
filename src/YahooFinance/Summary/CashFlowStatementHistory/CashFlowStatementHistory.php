<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\CashFlowStatementHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistory\CashFlowStatementHistoryInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\CashFlowStatement;

class CashFlowStatementHistory implements CashFlowStatementHistoryInterface
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
