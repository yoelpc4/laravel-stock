<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\BalanceSheetHistoryQuarterly;

use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistoryQuarterly\BalanceSheetHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\BalanceSheetStatement;

class BalanceSheetHistoryQuarterly implements BalanceSheetHistoryQuarterlyInterface
{
    /**
     * @var BalanceSheetStatement[]
     */
    protected $balanceSheetStatements;

    /**
     * BalanceSheetHistory constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->balanceSheetStatements = array_map(function (array $data) {
            return new BalanceSheetStatement($data);
        }, $data['balanceSheetStatements'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function balanceSheetStatements()
    {
        return $this->balanceSheetStatements;
    }
}
