<?php

namespace Yoelpc4\LaravelStock\Tests;

use Illuminate\Validation\ValidationException;
use Psr\Http\Client\ClientExceptionInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\AssetProfileInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\CompanyOfficerInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistory\BalanceSheetHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetHistoryQuarterly\BalanceSheetHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetStatementInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents\CalendarEventsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistory\CashFlowStatementHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementHistoryQuarterly\CashFlowStatementHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\DefaultKeyStatistics\DefaultKeyStatisticsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsChartInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsChartQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\FinancialsChartInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\FinancialsChartQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\FinancialsChartYearlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory\EarningsHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EarningsTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EpsRevisionsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EpsTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\RevenueEstimateInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\EstimateInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\FinancialData\FinancialDataInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\FundOwnership\FundOwnershipInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\HolderInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistory\IncomeStatementHistoryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementHistoryQuarterly\IncomeStatementHistoryQuarterlyInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IndexTrend\IndexTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\IndustryTrend\IndustryTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InsiderHolders\InsiderHoldersInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions\InsiderTransactionsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions\TransactionInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\InstitutionOwnership\InstitutionOwnershipInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\MajorDirectHolders\MajorDirectHoldersInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\MajorHoldersBreakdown\MajorHoldersBreakdownInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\NetSharePurchaseActivity\NetSharePurchaseActivityInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\OwnershipListInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\RecommendationTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SecFillings\FilingInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SecFillings\SecFilingsInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SectorTrend\SectorTrendInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SummaryInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory\UpgradeDowngradeHistoryInterface;
use Yoelpc4\LaravelStock\StockService;
use Yoelpc4\LaravelStock\YahooFinance;

class YahooFinanceTest extends TestCase
{
    /**
     *
     */
    public function testExpectedProvider()
    {
        $stockService = StockService::provider('yahoo_finance');

        $this->assertInstanceOf(YahooFinance::class, $stockService);
    }

    /**
     * @throws ValidationException
     * @throws ClientExceptionInterface
     */
    public function testSuccessfulGetSummary()
    {
        $symbol = 'MSFT';

        try {
            $summary = StockService::provider('yahoo_finance')->summary($symbol);
        } catch (ValidationException $e) {
            throw $e;
        } catch (ClientExceptionInterface $e) {
            throw $e;
        }

        $this->assertInstanceOf(SummaryInterface::class, $summary);

        $assetProfile = $summary->assetProfile();

        $this->assertInstanceOf(AssetProfileInterface::class, $assetProfile);

        foreach ($assetProfile->companyOfficers() as $companyOfficer) {
            $this->assertInstanceOf(CompanyOfficerInterface::class, $companyOfficer);
        }

        $balanceSheetHistory = $summary->balanceSheetHistory();

        $this->assertInstanceOf(BalanceSheetHistoryInterface::class, $balanceSheetHistory);

        foreach ($balanceSheetHistory->balanceSheetStatements() as $balanceSheetStatement) {
            $this->assertInstanceOf(BalanceSheetStatementInterface::class, $balanceSheetStatement);
        }

        $balanceSheetHistoryQuarterly = $summary->balanceSheetHistoryQuarterly();

        $this->assertInstanceOf(BalanceSheetHistoryQuarterlyInterface::class, $balanceSheetHistoryQuarterly);

        foreach ($balanceSheetHistoryQuarterly->balanceSheetStatements() as $balanceSheetStatement) {
            $this->assertInstanceOf(BalanceSheetStatementInterface::class, $balanceSheetStatement);
        }

        $calendarEvents = $summary->calendarEvents();

        $this->assertInstanceOf(CalendarEventsInterface::class, $calendarEvents);

        foreach ($calendarEvents->earnings() as $earnings) {
            $this->assertInstanceOf(\Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents\EarningsInterface::class, $earnings);
        }

        $cashFlowStatementHistory = $summary->cashFlowStatementHistory();

        $this->assertInstanceOf(CashFlowStatementHistoryInterface::class, $cashFlowStatementHistory);

        foreach ($cashFlowStatementHistory->cashFlowStatements() as $cashFlowStatement) {
            $this->assertInstanceOf(CashFlowStatementInterface::class, $cashFlowStatement);
        }

        $cashFlowStatementHistoryQuarterly = $summary->cashFlowStatementHistoryQuarterly();

        $this->assertInstanceOf(CashFlowStatementHistoryQuarterlyInterface::class, $summary->cashFlowStatementHistoryQuarterly());

        foreach ($cashFlowStatementHistoryQuarterly->cashFlowStatements() as $cashFlowStatement) {
            $this->assertInstanceOf(CashFlowStatementInterface::class, $cashFlowStatement);
        }

        $this->assertInstanceOf(DefaultKeyStatisticsInterface::class, $summary->defaultKeyStatistics());

        $earnings = $summary->earnings();

        $this->assertInstanceOf(EarningsInterface::class, $earnings);

        foreach ($earnings->earningsChart() as $earningsChart) {
            $this->assertInstanceOf(EarningsChartInterface::class, $earningsChart);

            foreach ($earningsChart->quarterlies() as $earningsChartQuarterly) {
                $this->assertInstanceOf(EarningsChartQuarterlyInterface::class, $earningsChartQuarterly);
            }
        }

        foreach ($earnings->financialsChart() as $financialsChart) {
            $this->assertInstanceOf(FinancialsChartInterface::class, $financialsChart);

            foreach ($financialsChart->quarterlies() as $financialsChartQuarterly) {
                $this->assertInstanceOf(FinancialsChartQuarterlyInterface::class, $financialsChartQuarterly);
            }

            foreach ($financialsChart->yearlies() as $financialsChartYearly) {
                $this->assertInstanceOf(FinancialsChartYearlyInterface::class, $financialsChartYearly);
            }
        }

        $earningsHistory = $summary->earningsHistory();

        $this->assertInstanceOf(EarningsHistoryInterface::class, $earningsHistory);

        foreach ($earningsHistory->histories() as $history) {
            $this->assertInstanceOf(\Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory\HistoryInterface::class, $history);
        }

        $earningsTrend = $summary->earningsTrend();

        $this->assertInstanceOf(EarningsTrendInterface::class, $earningsTrend);

        foreach ($earningsTrend->trends() as $trend) {
            $this->assertInstanceOf(\Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\TrendInterface::class, $trend);

            $this->assertInstanceOf(RevenueEstimateInterface::class, $trend->revenueEstimate());

            $this->assertInstanceOf(EpsTrendInterface::class, $trend->epsTrend());

            $this->assertInstanceOf(EpsRevisionsInterface::class, $trend->epsRevisions());
        }

        $this->assertInstanceOf(FinancialDataInterface::class, $summary->financialData());

        $fundOwnership = $summary->fundOwnership();

        $this->assertInstanceOf(FundOwnershipInterface::class, $fundOwnership);

        foreach ($fundOwnership->ownershipLists() as $ownershipList) {
            $this->assertInstanceOf(OwnershipListInterface::class, $ownershipList);
        }

        $incomeStatementHistory = $summary->incomeStatementHistory();

        $this->assertInstanceOf(IncomeStatementHistoryInterface::class, $incomeStatementHistory);

        foreach ($incomeStatementHistory->incomeStatements() as $incomeStatement) {
            $this->assertInstanceOf(IncomeStatementInterface::class, $incomeStatement);
        }

        $incomeStatementHistoryQuarterly = $summary->incomeStatementHistoryQuarterly();

        $this->assertInstanceOf(IncomeStatementHistoryQuarterlyInterface::class, $summary->incomeStatementHistoryQuarterly());

        foreach ($incomeStatementHistoryQuarterly->incomeStatements() as $incomeStatement) {
            $this->assertInstanceOf(IncomeStatementInterface::class, $incomeStatement);
        }

        $indexTrend = $summary->indexTrend();

        $this->assertInstanceOf(IndexTrendInterface::class, $indexTrend);

        foreach ($indexTrend->estimates() as $estimate) {
            $this->assertInstanceOf(EstimateInterface::class, $estimate);
        }

        $industryTrend = $summary->industryTrend();

        $this->assertInstanceOf(IndustryTrendInterface::class, $industryTrend);

        foreach ($industryTrend->estimates() as $estimate) {
            $this->assertInstanceOf(EstimateInterface::class, $estimate);
        }

        $insiderHolders = $summary->insiderHolders();

        $this->assertInstanceOf(InsiderHoldersInterface::class, $insiderHolders);

        foreach ($insiderHolders->holders() as $holder) {
            $this->assertInstanceOf(HolderInterface::class, $holder);
        }

        $insiderTransactions = $summary->insiderTransactions();

        $this->assertInstanceOf(InsiderTransactionsInterface::class, $insiderTransactions);

        foreach ($insiderTransactions->transactions() as $transaction) {
            $this->assertInstanceOf(TransactionInterface::class, $transaction);
        }

        $institutionOwnership = $summary->institutionOwnership();

        $this->assertInstanceOf(InstitutionOwnershipInterface::class, $institutionOwnership);

        foreach ($institutionOwnership->ownershipLists() as $ownershipList) {
            $this->assertInstanceOf(OwnershipListInterface::class, $ownershipList);
        }

        $majorDirectHolders = $summary->majorDirectHolders();

        $this->assertInstanceOf(MajorDirectHoldersInterface::class, $majorDirectHolders);

        foreach ($majorDirectHolders->holders() as $holder) {
            $this->assertInstanceOf(HolderInterface::class, $holder);
        }

        $this->assertInstanceOf(MajorHoldersBreakdownInterface::class, $summary->majorHoldersBreakdown());

        $this->assertInstanceOf(NetSharePurchaseActivityInterface::class, $summary->netSharePurchaseActivity());

        $recommendationTrend = $summary->recommendationTrend();

        $this->assertInstanceOf(RecommendationTrendInterface::class, $recommendationTrend);

        foreach ($recommendationTrend->trends() as $trend) {
            $this->assertInstanceOf(\Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\TrendInterface::class, $trend);
        }

        $secFilings = $summary->secFilings();

        $this->assertInstanceOf(SecFilingsInterface::class, $secFilings);

        foreach ($secFilings->filings() as $filing) {
            $this->assertInstanceOf(FilingInterface::class, $filing);
        }

        $sectorTrend = $summary->sectorTrend();

        $this->assertInstanceOf(SectorTrendInterface::class, $sectorTrend);

        foreach ($sectorTrend->estimates() as $estimate) {
            $this->assertInstanceOf(EstimateInterface::class, $estimate);
        }

        $upgradeDowngradeHistory = $summary->upgradeDowngradeHistory();

        $this->assertInstanceOf(UpgradeDowngradeHistoryInterface::class, $upgradeDowngradeHistory);

        foreach ($upgradeDowngradeHistory->histories() as $history) {
            $this->assertInstanceOf(\Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory\HistoryInterface::class, $history);
        }
    }
}
