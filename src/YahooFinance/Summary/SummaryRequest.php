<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Yoelpc4\LaravelStock\Concerns\Request;
use Yoelpc4\LaravelStock\Contracts\Requestable;
use Yoelpc4\LaravelStock\Contracts\Validatable;

class SummaryRequest implements Requestable, Validatable
{
    use Request;

    /**
     * @var array
     */
    const AVAILABLE_MODULES = [
        'assetProfile',
        'balanceSheetHistory',
        'balanceSheetHistoryQuarterly',
        'calendarEvents',
        'cashFlowStatementHistory',
        'cashFlowStatementHistoryQuarterly',
        'defaultKeyStatistics',
        'earnings',
        'earningsHistory',
        'earningsTrend',
        'financialData',
        'fundOwnership',
        'incomeStatementHistory',
        'incomeStatementHistoryQuarterly',
        'indexTrend',
        'industryTrend',
        'insiderHolders',
        'insiderTransactions',
        'institutionOwnership',
        'majorDirectHolders',
        'majorHoldersBreakdown',
        'netSharePurchaseActivity',
        'recommendationTrend',
        'secFilings',
        'sectorTrend',
        'upgradeDowngradeHistory',
    ];

    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $symbol;

    /**
     * SummaryRequest constructor.
     *
     * @param  string  $symbol
     */
    public function __construct(string $symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * @inheritDoc
     */
    public function endpoint()
    {
        return "v10/finance/quoteSummary/{$this->symbol}";
    }

    /**
     * @inheritDoc
     */
    public function query()
    {
        return [
            'modules' => implode(',', static::AVAILABLE_MODULES),
        ];
    }

    /**
     * @inheritDoc
     */
    public function data()
    {
        return [
            'symbol' => $this->symbol,
        ];
    }

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            'symbol' => 'required|string|between:1,7',
        ];
    }

    /**
     * @inheritDoc
     */
    public function messages()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function customAttributes()
    {
        return [
            'symbol' => __('laravel-stock::validation.attributes.symbol'),
        ];
    }
}
