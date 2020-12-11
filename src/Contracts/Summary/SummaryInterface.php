<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\AssetProfileInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistory\BalanceSheetHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistoryQuarterly\BalanceSheetHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents\CalendarEventsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistory\CashFlowStatementHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistoryQuarterly\CashFlowStatementHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\DefaultKeyStatistics\DefaultKeyStatisticsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory\EarningsHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EarningsTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\FinancialData\FinancialDataInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\FundOwnership\FundOwnershipInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistory\IncomeStatementHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistoryQuarterly\IncomeStatementHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IndexTrend\IndexTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IndustryTrend\IndustryTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InsiderHolders\InsiderHoldersInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions\InsiderTransactionsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InstitutionOwnership\InstitutionOwnershipInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\MajorDirectHolders\MajorDirectHoldersInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\NetSharePurchaseActivity\NetSharePurchaseActivityInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\RecommendationTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SecFillings\SecFilingsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SectorTrend\SectorTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory\UpgradeDowngradeHistoryInterface;

interface SummaryInterface
{
    /**
     * Get summary's asset profile
     *
     * @return AssetProfileInterface|null
     */
    public function assetProfile();

    /**
     * Get summary's balance sheet history
     *
     * @return BalanceSheetHistoryInterface|null
     */
    public function balanceSheetHistory();

    /**
     * Get summary's balance sheet history quarterlies
     *
     * @return BalanceSheetHistoryQuarterlyInterface|null
     */
    public function balanceSheetHistoryQuarterly();

    /**
     * Get summary's calendar events
     *
     * @return CalendarEventsInterface|null
     */
    public function calendarEvents();

    /**
     * Get summary's cash flow statement history
     *
     * @return CashFlowStatementHistoryInterface|null
     */
    public function cashFlowStatementHistory();

    /**
     * Get summary's cash flow statement history quarterlies
     *
     * @return CashFlowStatementHistoryQuarterlyInterface|null
     */
    public function cashFlowStatementHistoryQuarterly();

    /**
     * Get summary's default key statistics
     *
     * @return DefaultKeyStatisticsInterface|null
     */
    public function defaultKeyStatistics();

    /**
     * Get summary's earnings
     *
     * @return EarningsInterface|null
     */
    public function earnings();

    /**
     * Get summary's earnings history
     *
     * @return EarningsHistoryInterface|null
     */
    public function earningsHistory();

    /**
     * Get summary's earnings trend
     *
     * @return EarningsTrendInterface|null
     */
    public function earningsTrend();

    /**
     * Get summary's financial data
     *
     * @return FinancialDataInterface|null
     */
    public function financialData();

    /**
     * Get summary's fund ownership
     *
     * @return FundOwnershipInterface|null
     */
    public function fundOwnership();

    /**
     * Get summary's income statement history
     *
     * @return IncomeStatementHistoryInterface|null
     */
    public function incomeStatementHistory();

    /**
     * Get summary's income statement history quarterlies
     *
     * @return IncomeStatementHistoryQuarterlyInterface|null
     */
    public function incomeStatementHistoryQuarterly();

    /**
     * Get summary's index trend
     *
     * @return IndexTrendInterface|null
     */
    public function indexTrend();

    /**
     * Get summary's industry trend
     *
     * @return IndustryTrendInterface|null
     */
    public function industryTrend();

    /**
     * Get summary's industry holders
     *
     * @return InsiderHoldersInterface|null
     */
    public function insiderHolders();

    /**
     * Get summary's industry transactions
     *
     * @return InsiderTransactionsInterface|null
     */
    public function insiderTransactions();

    /**
     * Get summary's institution ownership
     *
     * @return InstitutionOwnershipInterface|null
     */
    public function institutionOwnership();

    /**
     * Get summary's major direct holders
     *
     * @return MajorDirectHoldersInterface|null
     */
    public function majorDirectHolders();

    /**
     * Get summary's major holders breakdown
     *
     * @return MajorDirectHoldersInterface|null
     */
    public function majorHoldersBreakdown();

    /**
     * Get summary's net share purchase activity
     *
     * @return NetSharePurchaseActivityInterface|null
     */
    public function netSharePurchaseActivity();

    /**
     * Get summary's recommendation trend
     *
     * @return RecommendationTrendInterface|null
     */
    public function recommendationTrend();

    /**
     * Get summary's sec filings
     *
     * @return SecFilingsInterface|null
     */
    public function secFilings();

    /**
     * Get summary's sector trend
     *
     * @return SectorTrendInterface|null
     */
    public function sectorTrend();

    /**
     * Get summary's upgrade downgrade history
     *
     * @return UpgradeDowngradeHistoryInterface|null
     */
    public function upgradeDowngradeHistory();
}
