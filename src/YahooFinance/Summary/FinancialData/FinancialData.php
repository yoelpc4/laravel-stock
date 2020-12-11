<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\FinancialData;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\FinancialData\FinancialDataInterface;

class FinancialData implements FinancialDataInterface
{
    /**
     * @var float|null
     */
    protected $currentPrice;

    /**
     * @var float|null
     */
    protected $targetHighPrice;

    /**
     * @var float|null
     */
    protected $targetLowPrice;

    /**
     * @var float|null
     */
    protected $targetMeanPrice;

    /**
     * @var float|null
     */
    protected $targetMedianPrice;

    /**
     * @var float|null
     */
    protected $recommendationMean;

    /**
     * @var string|null
     */
    protected $recommendationKey;

    /**
     * @var int|null
     */
    protected $numberOfAnalystOpinions;

    /**
     * @var float|null
     */
    protected $totalCash;

    /**
     * @var float|null
     */
    protected $totalCashPerShare;

    /**
     * @var float|null
     */
    protected $ebitda;

    /**
     * @var float|null
     */
    protected $totalDebt;

    /**
     * @var float|null
     */
    protected $quickRatio;

    /**
     * @var float|null
     */
    protected $currentRatio;

    /**
     * @var float|null
     */
    protected $totalRevenue;

    /**
     * @var float|null
     */
    protected $debtToEquity;

    /**
     * @var float|null
     */
    protected $revenuePerShare;

    /**
     * @var float|null
     */
    protected $returnOnAssets;

    /**
     * @var float|null
     */
    protected $returnOnEquity;

    /**
     * @var float|null
     */
    protected $grossProfits;

    /**
     * @var float|null
     */
    protected $freeCashFlow;

    /**
     * @var float|null
     */
    protected $operatingCashFlow;

    /**
     * @var float|null
     */
    protected $earningsGrowth;

    /**
     * @var float|null
     */
    protected $revenueGrowth;

    /**
     * @var float|null
     */
    protected $grossMargins;

    /**
     * @var float|null
     */
    protected $ebitdaMargins;

    /**
     * @var float|null
     */
    protected $operatingMargins;

    /**
     * @var float|null
     */
    protected $profitMargins;

    /**
     * @var string|null
     */
    protected $financialCurrency;

    /**
     * FinancialData constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->currentPrice = Arr::get($data, 'currentPrice.raw');

        $this->targetHighPrice = Arr::get($data, 'targetHighPrice.raw');

        $this->targetLowPrice = Arr::get($data, 'targetLowPrice.raw');

        $this->targetMeanPrice = Arr::get($data, 'targetMeanPrice.raw');

        $this->targetMedianPrice = Arr::get($data, 'targetMedianPrice.raw');

        $this->recommendationMean = Arr::get($data, 'recommendationMean.raw');

        $this->recommendationKey = $data['recommendationKey'] ?? null;

        $this->numberOfAnalystOpinions = Arr::get($data, 'numberOfAnalystOpinions.raw');

        $this->totalCash = Arr::get($data, 'totalCash.raw');

        $this->totalCashPerShare = Arr::get($data, 'totalCashPerShare.raw');

        $this->ebitda = Arr::get($data, 'ebitda.raw');

        $this->totalDebt = Arr::get($data, 'totalDebt.raw');

        $this->quickRatio = Arr::get($data, 'quickRatio.raw');

        $this->currentRatio = Arr::get($data, 'currentRatio.raw');

        $this->totalRevenue = Arr::get($data, 'totalRevenue.raw');

        $this->debtToEquity = Arr::get($data, 'debtToEquity.raw');

        $this->revenuePerShare = Arr::get($data, 'revenuePerShare.raw');

        $this->returnOnAssets = Arr::get($data, 'returnOnAssets.raw');

        $this->returnOnEquity = Arr::get($data, 'returnOnEquity.raw');

        $this->grossProfits = Arr::get($data, 'grossProfits.raw');

        $this->freeCashFlow = Arr::get($data, 'freeCashflow.raw');

        $this->operatingCashFlow = Arr::get($data, 'operatingCashflow.raw');

        $this->earningsGrowth = Arr::get($data, 'earningsGrowth.raw');

        $this->revenueGrowth = Arr::get($data, 'revenueGrowth.raw');

        $this->grossMargins = Arr::get($data, 'grossMargins.raw');

        $this->ebitdaMargins = Arr::get($data, 'ebitdaMargins.raw');

        $this->operatingMargins = Arr::get($data, 'operatingMargins.raw');

        $this->profitMargins = Arr::get($data, 'profitMargins.raw');

        $this->financialCurrency = $data['financialCurrency'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function currentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * @inheritDoc
     */
    public function targetHighPrice()
    {
        return $this->targetHighPrice;
    }

    /**
     * @inheritDoc
     */
    public function targetLowPrice()
    {
        return $this->targetLowPrice;
    }

    /**
     * @inheritDoc
     */
    public function targetMeanPrice()
    {
        return $this->targetMeanPrice;
    }

    /**
     * @inheritDoc
     */
    public function targetMedianPrice()
    {
        return $this->targetMedianPrice;
    }

    /**
     * @inheritDoc
     */
    public function recommendationMean()
    {
        return $this->recommendationMean;
    }

    /**
     * @inheritDoc
     */
    public function recommendationKey()
    {
        return $this->recommendationKey;
    }

    /**
     * @inheritDoc
     */
    public function numberOfAnalystOpinions()
    {
        return $this->numberOfAnalystOpinions;
    }

    /**
     * @inheritDoc
     */
    public function totalCash()
    {
        return $this->totalCash;
    }

    /**
     * @inheritDoc
     */
    public function totalCashPerShare()
    {
        return $this->totalCashPerShare;
    }

    /**
     * @inheritDoc
     */
    public function ebitda()
    {
        return $this->ebitda;
    }

    /**
     * @inheritDoc
     */
    public function totalDebt()
    {
        return $this->totalDebt;
    }

    /**
     * @inheritDoc
     */
    public function quickRatio()
    {
        return $this->quickRatio;
    }

    /**
     * @inheritDoc
     */
    public function currentRatio()
    {
        return $this->currentRatio;
    }

    /**
     * @inheritDoc
     */
    public function totalRevenue()
    {
        return $this->totalRevenue;
    }

    /**
     * @inheritDoc
     */
    public function debtToEquity()
    {
        return $this->debtToEquity;
    }

    /**
     * @inheritDoc
     */
    public function revenuePerShare()
    {
        return $this->revenuePerShare;
    }

    /**
     * @inheritDoc
     */
    public function returnOnAssets()
    {
        return $this->returnOnAssets;
    }

    /**
     * @inheritDoc
     */
    public function returnOnEquity()
    {
        return $this->returnOnEquity;
    }

    /**
     * @inheritDoc
     */
    public function grossProfits()
    {
        return $this->grossProfits;
    }

    /**
     * @inheritDoc
     */
    public function freeCashFlow()
    {
        return $this->freeCashFlow;
    }

    /**
     * @inheritDoc
     */
    public function operatingCashFlow()
    {
        return $this->operatingCashFlow;
    }

    /**
     * @inheritDoc
     */
    public function earningsGrowth()
    {
        return $this->earningsGrowth;
    }

    /**
     * @inheritDoc
     */
    public function revenueGrowth()
    {
        return $this->revenueGrowth;
    }

    /**
     * @inheritDoc
     */
    public function grossMargins()
    {
        return $this->grossMargins;
    }

    /**
     * @inheritDoc
     */
    public function ebitdaMargins()
    {
        return $this->ebitdaMargins;
    }

    /**
     * @inheritDoc
     */
    public function operatingMargins()
    {
        return $this->operatingMargins;
    }

    /**
     * @inheritDoc
     */
    public function profitMargins()
    {
        return $this->profitMargins;
    }

    /**
     * @inheritDoc
     */
    public function financialCurrency()
    {
        return $this->financialCurrency;
    }
}
