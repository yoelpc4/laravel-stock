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
    const MODULES = [
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
        'esgScores',
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
        'pageViews',
        'price',
        'quoteType',
        'recommendationTrend',
        'secFilings',
        'sectorTrend',
        'summaryDetail',
        'summaryProfile',
        'upgradeDowngradeHistory',
    ];

    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var int
     */
    protected $version;

    /**
     * @var string
     */
    protected $symbol;

    /**
     * SummaryRequest constructor.
     *
     * @param  int  $version
     * @param  string  $symbol
     */
    public function __construct(int $version, string $symbol)
    {
        $this->version = $version;

        $this->symbol = $symbol;
    }

    /**
     * @inheritDoc
     */
    public function endpoint()
    {
        return "v{$this->version}/finance/quoteSummary/{$this->symbol}";
    }

    /**
     * @inheritDoc
     */
    public function query()
    {
        return [
            'modules' => implode(',', static::MODULES),
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
