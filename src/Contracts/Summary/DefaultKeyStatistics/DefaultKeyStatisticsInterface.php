<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\DefaultKeyStatistics;

interface DefaultKeyStatisticsInterface
{
    /**
     * Get default key statistics' price hint
     *
     * @return int|null
     */
    public function priceHint();

    /**
     * Get default key statistics' enterprise value
     *
     * @return float|null
     */
    public function enterpriseValue();

    /**
     * Get default key statistics' forward PE
     *
     * @return float|null
     */
    public function forwardPE();

    /**
     * Get default key statistics' profit margins (%)
     *
     * @return float|null
     */
    public function profitMargins();

    /**
     * Get default key statistics' float shares
     *
     * @return float|null
     */
    public function floatShares();

    /**
     * Get default key statistics' shares outstanding
     *
     * @return float|null
     */
    public function sharesOutstanding();

    /**
     * Get default key statistics' shares short
     *
     * @return float|null
     */
    public function sharesShort();

    /**
     * Get default key statistics' shares short prior month
     *
     * @return float|null
     */
    public function sharesShortPriorMonth();

    /**
     * Get default key statistics' shares short previous month date
     *
     * @return float|null
     */
    public function sharesShortPreviousMonthDate();

    /**
     * Get default key statistics' date short interest
     *
     * @return string|null
     */
    public function dateShortInterest();

    /**
     * Get default key statistics' shares percent shares out (%)
     *
     * @return float|null
     */
    public function sharesPercentSharesOut();

    /**
     * Get default key statistics' held percent insiders (%)
     *
     * @return float|null
     */
    public function heldPercentInsiders();

    /**
     * Get default key statistics' held percent institutions (%)
     *
     * @return float|null
     */
    public function heldPercentInstitutions();

    /**
     * Get default key statistics' short ratio
     *
     * @return float|null
     */
    public function shortRatio();

    /**
     * Get default key statistics' short percent of float (%)
     *
     * @return float|null
     */
    public function shortPercentOfFloat();

    /**
     * Get default key statistics' beta
     *
     * @return float|null
     */
    public function beta();

    /**
     * Get default key statistics' implied shares outstanding
     *
     * @return float|null
     */
    public function impliedSharesOutstanding();

    /**
     * Get default key statistics' morning star overall rating
     *
     * @return float|null
     */
    public function morningStarOverallRating();

    /**
     * Get default key statistics' morning star risk rating
     *
     * @return float|null
     */
    public function morningStarRiskRating();

    /**
     * Get default key statistics' category
     *
     * @return string|null
     */
    public function category();

    /**
     * Get default key statistics' book value
     *
     * @return float|null
     */
    public function bookValue();

    /**
     * Get default key statistics' price to book
     *
     * @return float|null
     */
    public function priceToBook();

    /**
     * Get default key statistics' annual report expense ratio
     *
     * @return float|null
     */
    public function annualReportExpenseRatio();

    /**
     * Get default key statistics' year to date return
     *
     * @return float|null
     */
    public function yearToDateReturn();

    /**
     * Get default key statistics' beta three year
     *
     * @return float|null
     */
    public function betaThreeYear();

    /**
     * Get default key statistics' total assets
     *
     * @return float|null
     */
    public function totalAssets();

    /**
     * Get default key statistics' yield
     *
     * @return float|null
     */
    public function yield();

    /**
     * Get default key statistics' fund family
     *
     * @return string|null
     */
    public function fundFamily();

    /**
     * Get default key statistics' fund inception date
     *
     * @return string|null
     */
    public function fundInceptionDate();

    /**
     * Get default key statistics' legal type
     *
     * @return string|null
     */
    public function legalType();

    /**
     * Get default key statistics' three year average return
     *
     * @return float|null
     */
    public function threeYearAverageReturn();

    /**
     * Get default key statistics' five year average return
     *
     * @return float|null
     */
    public function fiveYearAverageReturn();

    /**
     * Get default key statistics' price to sales trailing twelve months
     *
     * @return float|null
     */
    public function priceToSalesTrailingTwelveMonths();

    /**
     * Get default key statistics' last fiscal year end
     *
     * @return string|null
     */
    public function lastFiscalYearEnd();

    /**
     * Get default key statistics' next fiscal year end
     *
     * @return string|null
     */
    public function nextFiscalYearEnd();

    /**
     * Get default key statistics' most recent quarter
     *
     * @return string|null
     */
    public function mostRecentQuarter();

    /**
     * Get default key statistics' earnings quarterlies growth (%)
     *
     * @return float|null
     */
    public function earningsQuarterlyGrowth();

    /**
     * Get default key statistics' revenue quarterlies growth (%)
     *
     * @return float|null
     */
    public function revenueQuarterlyGrowth();

    /**
     * Get default key statistics' net income to common
     *
     * @return float|null
     */
    public function netIncomeToCommon();

    /**
     * Get default key statistics' trailing eps
     *
     * @return float|null
     */
    public function trailingEps();

    /**
     * Get default key statistics' forward eps
     *
     * @return float|null
     */
    public function forwardEps();

    /**
     * Get default key statistics' peg ratio
     *
     * @return float|null
     */
    public function pegRatio();

    /**
     * Get default key statistics' last split factor
     *
     * @return string|null
     */
    public function lastSplitFactor();

    /**
     * Get default key statistics' last split date
     *
     * @return string|null
     */
    public function lastSplitDate();

    /**
     * Get default key statistics' enterprise to revenue
     *
     * @return float|null
     */
    public function enterpriseToRevenue();

    /**
     * Get default key statistics' enterprise to ebitda
     *
     * @return float|null
     */
    public function enterpriseToEbitda();

    /**
     * Get default key statistics' fifty two week change (%)
     *
     * @return float|null
     */
    public function fiftyTwoWeekChange();

    /**
     * Get default key statistics' S&P fifty two week change (%)
     *
     * @return float|null
     */
    public function sAndPFiftyTwoWeekChange();

    /**
     * Get default key statistics' last dividend value
     *
     * @return float|null
     */
    public function lastDividendValue();

    /**
     * Get default key statistics' last dividend date
     *
     * @return string|null
     */
    public function lastDividendDate();

    /**
     * Get default key statistics' last capital gain
     *
     * @return float|null
     */
    public function lastCapitalGain();

    /**
     * Get default key statistics' annual holdings turnover
     *
     * @return float|null
     */
    public function annualHoldingsTurnover();
}
