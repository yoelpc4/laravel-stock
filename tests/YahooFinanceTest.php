<?php

namespace Yoelpc4\LaravelStock\Tests;

use Illuminate\Validation\ValidationException;
use Psr\Http\Client\ClientExceptionInterface;
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
use Yoelpc4\LaravelStock\Contracts\Summary\MajorHoldersBreakdown\MajorHoldersBreakdownInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\NetSharePurchaseActivity\NetSharePurchaseActivityInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\RecommendationTrendInterface;
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

        $this->assertInstanceOf(AssetProfileInterface::class, $summary->assetProfile());

        $this->assertInstanceOf(BalanceSheetHistoryInterface::class, $summary->balanceSheetHistory());

        $this->assertInstanceOf(BalanceSheetHistoryQuarterlyInterface::class, $summary->balanceSheetHistoryQuarterly());

        $this->assertInstanceOf(CalendarEventsInterface::class, $summary->calendarEvents());

        $this->assertInstanceOf(CashFlowStatementHistoryInterface::class, $summary->cashFlowStatementHistory());

        $this->assertInstanceOf(CashFlowStatementHistoryQuarterlyInterface::class, $summary->cashFlowStatementHistoryQuarterly());

        $this->assertInstanceOf(DefaultKeyStatisticsInterface::class, $summary->defaultKeyStatistics());

        $this->assertInstanceOf(EarningsInterface::class, $summary->earnings());

        $this->assertInstanceOf(EarningsHistoryInterface::class, $summary->earningsHistory());

        $this->assertInstanceOf(EarningsTrendInterface::class, $summary->earningsTrend());

        $this->assertInstanceOf(FinancialDataInterface::class, $summary->financialData());

        $this->assertInstanceOf(FundOwnershipInterface::class, $summary->fundOwnership());

        $this->assertInstanceOf(IncomeStatementHistoryInterface::class, $summary->incomeStatementHistory());

        $this->assertInstanceOf(IncomeStatementHistoryQuarterlyInterface::class, $summary->incomeStatementHistoryQuarterly());

        $this->assertInstanceOf(IndexTrendInterface::class, $summary->indexTrend());

        $this->assertInstanceOf(IndustryTrendInterface::class, $summary->industryTrend());

        $this->assertInstanceOf(InsiderHoldersInterface::class, $summary->insiderHolders());

        $this->assertInstanceOf(InsiderTransactionsInterface::class, $summary->insiderTransactions());

        $this->assertInstanceOf(InstitutionOwnershipInterface::class, $summary->institutionOwnership());

        $this->assertInstanceOf(MajorDirectHoldersInterface::class, $summary->majorDirectHolders());

        $this->assertInstanceOf(MajorHoldersBreakdownInterface::class, $summary->majorHoldersBreakdown());

        $this->assertInstanceOf(NetSharePurchaseActivityInterface::class, $summary->netSharePurchaseActivity());

        $this->assertInstanceOf(RecommendationTrendInterface::class, $summary->recommendationTrend());

        $this->assertInstanceOf(SecFilingsInterface::class, $summary->secFilings());

        $this->assertInstanceOf(SectorTrendInterface::class, $summary->sectorTrend());

        $this->assertInstanceOf(UpgradeDowngradeHistoryInterface::class, $summary->upgradeDowngradeHistory());
    }
}
