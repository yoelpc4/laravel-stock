<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Yoelpc4\LaravelStock\Contracts\Summary\SummaryInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\AssetProfile\AssetProfile;
use Yoelpc4\LaravelStock\YahooFinance\Summary\BalanceSheetHistory\BalanceSheetHistory;
use Yoelpc4\LaravelStock\YahooFinance\Summary\BalanceSheetHistoryQuarterly\BalanceSheetHistoryQuarterly;
use Yoelpc4\LaravelStock\YahooFinance\Summary\CalendarEvents\CalendarEvents;
use Yoelpc4\LaravelStock\YahooFinance\Summary\CashFlowStatementHistory\CashFlowStatementHistory;
use Yoelpc4\LaravelStock\YahooFinance\Summary\CashFlowStatementHistoryQuarterly\CashFlowStatementHistoryQuarterly;
use Yoelpc4\LaravelStock\YahooFinance\Summary\DefaultKeyStatistics\DefaultKeyStatistics;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Earnings\Earnings;
use Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsHistory\EarningsHistory;
use Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend\EarningsTrend;
use Yoelpc4\LaravelStock\YahooFinance\Summary\EsgScores\EsgScores;
use Yoelpc4\LaravelStock\YahooFinance\Summary\FinancialData\FinancialData;
use Yoelpc4\LaravelStock\YahooFinance\Summary\FundOwnership\FundOwnership;
use Yoelpc4\LaravelStock\YahooFinance\Summary\IncomeStatementHistory\IncomeStatementHistory;
use Yoelpc4\LaravelStock\YahooFinance\Summary\IncomeStatementHistoryQuarterly\IncomeStatementHistoryQuarterly;
use Yoelpc4\LaravelStock\YahooFinance\Summary\IndexTrend\IndexTrend;
use Yoelpc4\LaravelStock\YahooFinance\Summary\IndustryTrend\IndustryTrend;
use Yoelpc4\LaravelStock\YahooFinance\Summary\InsiderHolders\InsiderHolders;
use Yoelpc4\LaravelStock\YahooFinance\Summary\InsiderTransactions\InsiderTransactions;
use Yoelpc4\LaravelStock\YahooFinance\Summary\InstitutionOwnership\InstitutionOwnership;
use Yoelpc4\LaravelStock\YahooFinance\Summary\MajorDirectHolders\MajorDirectHolders;
use Yoelpc4\LaravelStock\YahooFinance\Summary\MajorHoldersBreakdown\MajorHoldersBreakdown;
use Yoelpc4\LaravelStock\YahooFinance\Summary\NetSharePurchaseActivity\NetSharePurchaseActivity;
use Yoelpc4\LaravelStock\YahooFinance\Summary\PageViews\PageViews;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Price\Price;
use Yoelpc4\LaravelStock\YahooFinance\Summary\QuoteType\QuoteType;
use Yoelpc4\LaravelStock\YahooFinance\Summary\RecommendationTrend\RecommendationTrend;
use Yoelpc4\LaravelStock\YahooFinance\Summary\SecFilings\SecFilings;
use Yoelpc4\LaravelStock\YahooFinance\Summary\SectorTrend\SectorTrend;
use Yoelpc4\LaravelStock\YahooFinance\Summary\SummaryDetail\SummaryDetail;
use Yoelpc4\LaravelStock\YahooFinance\Summary\SummaryProfile\SummaryProfile;
use Yoelpc4\LaravelStock\YahooFinance\Summary\UpgradeDowngradeHistory\UpgradeDowngradeHistory;

class Summary implements SummaryInterface
{
    /**
     * @var AssetProfile|null
     */
    protected $assetProfile;

    /**
     * @var BalanceSheetHistory|null
     */
    protected $balanceSheetHistory;

    /**
     * @var BalanceSheetHistoryQuarterly|null
     */
    protected $balanceSheetHistoryQuarterly;

    /**
     * @var CalendarEvents|null
     */
    protected $calendarEvents;

    /**
     * @var CashFlowStatementHistory|null
     */
    protected $cashFlowStatementHistory;

    /**
     * @var CashFlowStatementHistoryQuarterly|null
     */
    protected $cashFlowStatementHistoryQuarterly;

    /**
     * @var DefaultKeyStatistics|null
     */
    protected $defaultKeyStatistics;

    /**
     * @var Earnings|null
     */
    protected $earnings;

    /**
     * @var EarningsHistory|null
     */
    protected $earningsHistory;

    /**
     * @var EarningsTrend|null
     */
    protected $earningsTrend;

    /**
     * @var EsgScores|null
     */
    protected $esgScores;

    /**
     * @var FinancialData|null
     */
    protected $financialData;

    /**
     * @var FundOwnership|null
     */
    protected $fundOwnership;

    /**
     * @var IncomeStatementHistory|null
     */
    protected $incomeStatementHistory;

    /**
     * @var IncomeStatementHistoryQuarterly|null
     */
    protected $incomeStatementHistoryQuarterly;

    /**
     * @var IndexTrend|null
     */
    protected $indexTrend;

    /**
     * @var IndustryTrend|null
     */
    protected $industryTrend;

    /**
     * @var InsiderHolders|null
     */
    protected $insiderHolders;

    /**
     * @var InsiderTransactions|null
     */
    protected $insiderTransactions;

    /**
     * @var InstitutionOwnership|null
     */
    protected $institutionOwnership;

    /**
     * @var MajorDirectHolders|null
     */
    protected $majorDirectHolders;

    /**
     * @var MajorHoldersBreakdown|null
     */
    protected $majorHoldersBreakdown;

    /**
     * @var NetSharePurchaseActivity|null
     */
    protected $netSharePurchaseActivity;

    /**
     * @var PageViews|null
     */
    protected $pageViews;

    /**
     * @var Price|null
     */
    protected $price;

    /**
     * @var QuoteType|null
     */
    protected $quoteType;

    /**
     * @var RecommendationTrend|null
     */
    protected $recommendationTrend;

    /**
     * @var SecFilings|null
     */
    protected $secFilings;

    /**
     * @var SectorTrend|null
     */
    protected $sectorTrend;

    /**
     * @var SummaryDetail|null
     */
    protected $summaryDetail;

    /**
     * @var SummaryProfile|null
     */
    protected $summaryProfile;

    /**
     * @var UpgradeDowngradeHistory|null
     */
    protected $upgradeDowngradeHistory;

    /**
     * Summary constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $quoteSummary = $data['quoteSummary'] ?? null;

        if ($quoteSummary) {
            $results = $quoteSummary['result'] ?? [];

            foreach ($results as $result) {
                if ($result) {
                    $assetProfile = $result['assetProfile'] ?? null;

                    if ($assetProfile) {
                        $this->assetProfile = new AssetProfile($assetProfile);
                    }

                    $balanceSheetHistory = $result['balanceSheetHistory'] ?? null;

                    if ($balanceSheetHistory) {
                        $this->balanceSheetHistory = new BalanceSheetHistory($balanceSheetHistory);
                    }

                    $balanceSheetHistoryQuarterly = $result['balanceSheetHistoryQuarterly'] ?? null;

                    if ($balanceSheetHistoryQuarterly) {
                        $this->balanceSheetHistoryQuarterly = new BalanceSheetHistoryQuarterly($balanceSheetHistoryQuarterly);
                    }

                    $calendarEvents = $result['calendarEvents'] ?? null;

                    if ($calendarEvents) {
                        $this->calendarEvents = new CalendarEvents($calendarEvents);
                    }

                    $cashFlowStatementHistory = $result['cashflowStatementHistory'] ?? null;

                    if ($cashFlowStatementHistory) {
                        $this->cashFlowStatementHistory = new CashFlowStatementHistory($cashFlowStatementHistory);
                    }

                    $cashFlowStatementHistoryQuarterly = $result['cashflowStatementHistoryQuarterly'] ?? null;

                    if ($cashFlowStatementHistoryQuarterly) {
                        $this->cashFlowStatementHistoryQuarterly = new CashFlowStatementHistoryQuarterly($cashFlowStatementHistoryQuarterly);
                    }

                    $defaultKeyStatistics = $result['defaultKeyStatistics'] ?? null;

                    if ($defaultKeyStatistics) {
                        $this->defaultKeyStatistics = new DefaultKeyStatistics($defaultKeyStatistics);
                    }

                    $earnings = $result['earnings'] ?? null;

                    if ($earnings) {
                        $this->earnings = new Earnings($earnings);
                    }

                    $earningsHistory = $result['earningsHistory'] ?? null;

                    if ($earningsHistory) {
                        $this->earningsHistory = new EarningsHistory($earningsHistory);
                    }

                    $earningsTrend = $result['earningsTrend'] ?? null;

                    if ($earningsTrend) {
                        $this->earningsTrend = new EarningsTrend($earningsTrend);
                    }

                    $esgScores = $result['esgScores'] ?? null;

                    if ($esgScores) {
                        $this->esgScores = new EsgScores($esgScores);
                    }

                    $financialData = $result['financialData'] ?? null;

                    if ($financialData) {
                        $this->financialData = new FinancialData($financialData);
                    }

                    $fundOwnership = $result['fundOwnership'] ?? null;

                    if ($fundOwnership) {
                        $this->fundOwnership = new FundOwnership($fundOwnership);
                    }

                    $incomeStatementHistory = $result['incomeStatementHistory'] ?? null;

                    if ($incomeStatementHistory) {
                        $this->incomeStatementHistory = new IncomeStatementHistory($incomeStatementHistory);
                    }

                    $incomeStatementHistoryQuarterly = $result['incomeStatementHistoryQuarterly'] ?? null;

                    if ($incomeStatementHistoryQuarterly) {
                        $this->incomeStatementHistoryQuarterly = new IncomeStatementHistoryQuarterly($incomeStatementHistoryQuarterly);
                    }

                    $indexTrend = $result['indexTrend'] ?? null;

                    if ($indexTrend) {
                        $this->indexTrend = new IndexTrend($indexTrend);
                    }

                    $industryTrend = $result['industryTrend'] ?? null;

                    if ($industryTrend) {
                        $this->industryTrend = new IndustryTrend($industryTrend);
                    }

                    $insiderHolders = $result['insiderHolders'] ?? null;

                    if ($insiderHolders) {
                        $this->insiderHolders = new InsiderHolders($insiderHolders);
                    }

                    $insiderTransactions = $result['insiderTransactions'] ?? null;

                    if ($insiderTransactions) {
                        $this->insiderTransactions = new InsiderTransactions($insiderTransactions);
                    }

                    $institutionOwnership = $result['institutionOwnership'] ?? null;

                    if ($institutionOwnership) {
                        $this->institutionOwnership = new InstitutionOwnership($institutionOwnership);
                    }

                    $majorDirectHolders = $result['majorDirectHolders'] ?? null;

                    if ($majorDirectHolders) {
                        $this->majorDirectHolders = new MajorDirectHolders($majorDirectHolders);
                    }

                    $majorHoldersBreakdown = $result['majorHoldersBreakdown'] ?? null;

                    if ($majorHoldersBreakdown) {
                        $this->majorHoldersBreakdown = new MajorHoldersBreakdown($majorHoldersBreakdown);
                    }

                    $netSharePurchaseActivity = $result['netSharePurchaseActivity'] ?? null;

                    if ($netSharePurchaseActivity) {
                        $this->netSharePurchaseActivity = new NetSharePurchaseActivity($netSharePurchaseActivity);
                    }

                    $pageViews = $result['pageViews'] ?? null;

                    if ($pageViews) {
                        $this->pageViews = new PageViews($pageViews);
                    }

                    $price = $result['price'] ?? null;

                    if ($price) {
                        $this->price = new Price($price);
                    }

                    $quoteType = $result['quoteType'] ?? null;

                    if ($quoteType) {
                        $this->quoteType = new QuoteType($quoteType);
                    }

                    $recommendationTrend = $result['recommendationTrend'] ?? null;

                    if ($recommendationTrend) {
                        $this->recommendationTrend = new RecommendationTrend($recommendationTrend);
                    }

                    $secFilings = $result['secFilings'] ?? null;

                    if ($secFilings) {
                        $this->secFilings = new SecFilings($secFilings);
                    }

                    $sectorTrend = $result['sectorTrend'] ?? null;

                    if ($sectorTrend) {
                        $this->sectorTrend = new SectorTrend($sectorTrend);
                    }

                    $summaryDetail = $result['summaryDetail'] ?? null;

                    if ($summaryDetail) {
                        $this->summaryDetail = new SummaryDetail($summaryDetail);
                    }

                    $summaryProfile = $result['summaryProfile'] ?? null;

                    if ($summaryProfile) {
                        $this->summaryProfile = new SummaryProfile($summaryProfile);
                    }

                    $upgradeDowngradeHistory = $result['upgradeDowngradeHistory'] ?? null;

                    if ($upgradeDowngradeHistory) {
                        $this->upgradeDowngradeHistory = new UpgradeDowngradeHistory($upgradeDowngradeHistory);
                    }
                }
            }
        }
    }

    /**
     * @inheritDoc
     */
    public function assetProfile()
    {
        return $this->assetProfile;
    }

    /**
     * @inheritDoc
     */
    public function balanceSheetHistory()
    {
        return $this->balanceSheetHistory;
    }

    /**
     * @inheritDoc
     */
    public function balanceSheetHistoryQuarterly()
    {
        return $this->balanceSheetHistoryQuarterly;
    }

    /**
     * @inheritDoc
     */
    public function calendarEvents()
    {
        return $this->calendarEvents;
    }

    /**
     * @inheritDoc
     */
    public function cashFlowStatementHistory()
    {
        return $this->cashFlowStatementHistory;
    }

    /**
     * @inheritDoc
     */
    public function cashFlowStatementHistoryQuarterly()
    {
        return $this->cashFlowStatementHistoryQuarterly;
    }

    /**
     * @inheritDoc
     */
    public function defaultKeyStatistics()
    {
        return $this->defaultKeyStatistics;
    }

    /**
     * @inheritDoc
     */
    public function earnings()
    {
        return $this->earnings;
    }

    /**
     * @inheritDoc
     */
    public function earningsHistory()
    {
        return $this->earningsHistory;
    }

    /**
     * @inheritDoc
     */
    public function earningsTrend()
    {
        return $this->earningsTrend;
    }

    /**
     * @inheritDoc
     */
    public function esgScores()
    {
        return $this->esgScores;
    }

    /**
     * @inheritDoc
     */
    public function financialData()
    {
        return $this->financialData;
    }

    /**
     * @inheritDoc
     */
    public function fundOwnership()
    {
        return $this->fundOwnership;
    }

    /**
     * @inheritDoc
     */
    public function incomeStatementHistory()
    {
        return $this->incomeStatementHistory;
    }

    /**
     * @inheritDoc
     */
    public function incomeStatementHistoryQuarterly()
    {
        return $this->incomeStatementHistoryQuarterly;
    }

    /**
     * @inheritDoc
     */
    public function indexTrend()
    {
        return $this->indexTrend;
    }

    /**
     * @inheritDoc
     */
    public function industryTrend()
    {
        return $this->industryTrend;
    }

    /**
     * @inheritDoc
     */
    public function insiderHolders()
    {
        return $this->insiderHolders;
    }

    /**
     * @inheritDoc
     */
    public function insiderTransactions()
    {
        return $this->insiderTransactions;
    }

    /**
     * @inheritDoc
     */
    public function institutionOwnership()
    {
        return $this->institutionOwnership;
    }

    /**
     * @inheritDoc
     */
    public function majorDirectHolders()
    {
        return $this->majorDirectHolders;
    }

    /**
     * @inheritDoc
     */
    public function majorHoldersBreakdown()
    {
        return $this->majorHoldersBreakdown;
    }

    /**
     * @inheritDoc
     */
    public function netSharePurchaseActivity()
    {
        return $this->netSharePurchaseActivity;
    }

    /**
     * @inheritDoc
     */
    public function pageViews()
    {
        return $this->pageViews;
    }

    /**
     * @inheritDoc
     */
    public function price()
    {
        return $this->price;
    }

    /**
     * @inheritDoc
     */
    public function quoteType()
    {
        return $this->quoteType;
    }

    /**
     * @inheritDoc
     */
    public function recommendationTrend()
    {
        return $this->recommendationTrend;
    }

    /**
     * @inheritDoc
     */
    public function sectorTrend()
    {
        return $this->sectorTrend;
    }

    /**
     * @inheritDoc
     */
    public function secFilings()
    {
        return $this->secFilings;
    }

    /**
     * @inheritDoc
     */
    public function summaryDetail()
    {
        return $this->summaryDetail;
    }

    /**
     * @inheritDoc
     */
    public function summaryProfile()
    {
        return $this->summaryProfile;
    }

    /**
     * @inheritDoc
     */
    public function upgradeDowngradeHistory()
    {
        return $this->upgradeDowngradeHistory;
    }
}
