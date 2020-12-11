<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\FinancialData;

interface FinancialDataInterface
{
    /**
     * Get financial data's current price
     *
     * @return float|null
     */
    public function currentPrice();

    /**
     * Get financial data's target high price
     *
     * @return float|null
     */
    public function targetHighPrice();

    /**
     * Get financial data's target low price
     *
     * @return float|null
     */
    public function targetLowPrice();

    /**
     * Get financial data's target mean price
     *
     * @return float|null
     */
    public function targetMeanPrice();

    /**
     * Get financial data's target median price
     *
     * @return float|null
     */
    public function targetMedianPrice();

    /**
     * Get financial data's recommendation mean
     *
     * @return float|null
     */
    public function recommendationMean();

    /**
     * Get financial data's recommendation key
     *
     * @return string|null
     */
    public function recommendationKey();

    /**
     * Get financial data's number of analyst opinions
     *
     * @return int|null
     */
    public function numberOfAnalystOpinions();

    /**
     * Get financial data's total cash
     *
     * @return float|null
     */
    public function totalCash();

    /**
     * Get financial data's total cash per share
     *
     * @return float|null
     */
    public function totalCashPerShare();

    /**
     * Get financial data's ebitda
     *
     * @return float|null
     */
    public function ebitda();

    /**
     * Get financial data's total debt
     *
     * @return float|null
     */
    public function totalDebt();

    /**
     * Get financial data's quick ratio
     *
     * @return float|null
     */
    public function quickRatio();

    /**
     * Get financial data's current ratio
     *
     * @return float|null
     */
    public function currentRatio();

    /**
     * Get financial data's total revenue
     *
     * @return float|null
     */
    public function totalRevenue();

    /**
     * Get financial data's debt to equity
     *
     * @return float|null
     */
    public function debtToEquity();

    /**
     * Get financial data's revenue per share
     *
     * @return float|null
     */
    public function revenuePerShare();

    /**
     * Get financial data's return on assets (%)
     *
     * @return float|null
     */
    public function returnOnAssets();

    /**
     * Get financial data's return on equity (%)
     *
     * @return float|null
     */
    public function returnOnEquity();

    /**
     * Get financial data's gross profits
     *
     * @return float|null
     */
    public function grossProfits();

    /**
     * Get financial data's free cash flow
     *
     * @return float|null
     */
    public function freeCashFlow();

    /**
     * Get financial data's operating cash flow
     *
     * @return float|null
     */
    public function operatingCashFlow();

    /**
     * Get financial data's earnings growth (%)
     *
     * @return float|null
     */
    public function earningsGrowth();

    /**
     * Get financial data's revenue growth (%)
     *
     * @return float|null
     */
    public function revenueGrowth();

    /**
     * Get financial data's gross margins (%)
     *
     * @return float|null
     */
    public function grossMargins();

    /**
     * Get financial data's ebitda margins (%)
     *
     * @return float|null
     */
    public function ebitdaMargins();

    /**
     * Get financial data's operating margins (%)
     *
     * @return float|null
     */
    public function operatingMargins();

    /**
     * Get financial data's profit margins (%)
     *
     * @return float|null
     */
    public function profitMargins();

    /**
     * Get financial data's financial currency
     *
     * @return string|null
     */
    public function financialCurrency();
}
