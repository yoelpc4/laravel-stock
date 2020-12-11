<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\DefaultKeyStatistics;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\DefaultKeyStatistics\DefaultKeyStatisticsInterface;

class DefaultKeyStatistics implements DefaultKeyStatisticsInterface
{
    /**
     * @var int|null
     */
    protected $priceHint;

    /**
     * @var float|null
     */
    protected $enterpriseValue;

    /**
     * @var float|null
     */
    protected $forwardPE;

    /**
     * @var float|null
     */
    protected $profitMargins;

    /**
     * @var float|null
     */
    protected $floatShares;

    /**
     * @var float|null
     */
    protected $sharesOutstanding;

    /**
     * @var float|null
     */
    protected $sharesShort;

    /**
     * @var float|null
     */
    protected $sharesShortPriorMonth;

    /**
     * @var string|null
     */
    protected $sharesShortPreviousMonthDate;

    /**
     * @var string|null
     */
    protected $dateShortInterest;

    /**
     * @var float|null
     */
    protected $sharesPercentSharesOut;

    /**
     * @var float|null
     */
    protected $heldPercentInsiders;

    /**
     * @var float|null
     */
    protected $heldPercentInstitutions;

    /**
     * @var float|null
     */
    protected $shortRatio;

    /**
     * @var float|null
     */
    protected $shortPercentOfFloat;

    /**
     * @var float|null
     */
    protected $beta;

    /**
     * @var float|null
     */
    protected $impliedSharesOutstanding;

    /**
     * @var float|null
     */
    protected $morningStarOverallRating;

    /**
     * @var float|null
     */
    protected $morningStarRiskRating;

    /**
     * @var string|null
     */
    protected $category;

    /**
     * @var float|null
     */
    protected $bookValue;

    /**
     * @var float|null
     */
    protected $priceToBook;

    /**
     * @var float|null
     */
    protected $annualReportExpenseRatio;

    /**
     * @var float|null
     */
    protected $yearToDateReturn;

    /**
     * @var float|null
     */
    protected $betaThreeYear;

    /**
     * @var float|null
     */
    protected $totalAssets;

    /**
     * @var float|null
     */
    protected $yield;

    /**
     * @var string|null
     */
    protected $fundFamily;

    /**
     * @var string|null
     */
    protected $fundInceptionDate;

    /**
     * @var string|null
     */
    protected $legalType;

    /**
     * @var float|null
     */
    protected $threeYearAverageReturn;

    /**
     * @var float|null
     */
    protected $fiveYearAverageReturn;

    /**
     * @var float|null
     */
    protected $priceToSalesTrailingTwelveMonths;

    /**
     * @var string|null
     */
    protected $lastFiscalYearEnd;

    /**
     * @var string|null
     */
    protected $nextFiscalYearEnd;

    /**
     * @var string|null
     */
    protected $mostRecentQuarter;

    /**
     * @var float|null
     */
    protected $earningsQuarterlyGrowth;

    /**
     * @var float|null
     */
    protected $revenueQuarterlyGrowth;

    /**
     * @var float|null
     */
    protected $netIncomeToCommon;

    /**
     * @var float|null
     */
    protected $trailingEps;

    /**
     * @var float|null
     */
    protected $forwardEps;

    /**
     * @var float|null
     */
    protected $pegRatio;

    /**
     * @var string|null
     */
    protected $lastSplitFactor;

    /**
     * @var string|null
     */
    protected $lastSplitDate;

    /**
     * @var float|null
     */
    protected $enterpriseToRevenue;

    /**
     * @var float|null
     */
    protected $enterpriseToEbitda;

    /**
     * @var float|null
     */
    protected $fiftyTwoWeekChange;

    /**
     * @var float|null
     */
    protected $sAndPFiftyTwoWeekChange;

    /**
     * @var float|null
     */
    protected $lastDividendValue;

    /**
     * @var string|null
     */
    protected $lastDividendDate;

    /**
     * @var float|null
     */
    protected $lastCapitalGain;

    /**
     * @var float|null
     */
    protected $annualHoldingsTurnover;

    /**
     * DefaultKeyStatistics constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->priceHint = Arr::get($data, 'priceHint.raw');

        $this->enterpriseValue = Arr::get($data, 'enterpriseValue.raw');

        $this->forwardPE = Arr::get($data, 'forwardPE.raw');

        $this->profitMargins = Arr::get($data, 'profitMargins.raw');

        $this->floatShares = Arr::get($data, 'floatShares.raw');

        $this->sharesOutstanding = Arr::get($data, 'sharesOutstanding.raw');

        $this->sharesShort = Arr::get($data, 'sharesShort.raw');

        $this->sharesShortPriorMonth = Arr::get($data, 'sharesShortPriorMonth.raw');

        $this->sharesShortPreviousMonthDate = Arr::get($data, 'sharesShortPreviousMonthDate.fmt');

        $this->dateShortInterest = Arr::get($data, 'dateShortInterest.fmt');

        $this->sharesPercentSharesOut = Arr::get($data, 'sharesPercentSharesOut.raw');

        $this->heldPercentInsiders = Arr::get($data, 'heldPercentInsiders.raw');

        $this->heldPercentInstitutions = Arr::get($data, 'heldPercentInstitutions.raw');

        $this->shortRatio = Arr::get($data, 'shortRatio.raw');

        $this->shortPercentOfFloat = Arr::get($data, 'shortPercentOfFloat.raw');

        $this->beta = Arr::get($data, 'beta.raw');

        $this->impliedSharesOutstanding = Arr::get($data, 'impliedSharesOutstanding.raw');

        $this->morningStarOverallRating = Arr::get($data, 'morningStarOverallRating.raw');

        $this->morningStarRiskRating = Arr::get($data, 'morningStarRiskRating.raw');

        $this->category = $data['category'] ?? null;

        $this->bookValue = Arr::get($data, 'bookValue.raw');

        $this->priceToBook = Arr::get($data, 'priceToBook.raw');

        $this->annualReportExpenseRatio = Arr::get($data, 'annualReportExpenseRatio.raw');

        $this->yearToDateReturn = Arr::get($data, 'ytdReturn.raw');

        $this->betaThreeYear = Arr::get($data, 'beta3Year.raw');

        $this->totalAssets = Arr::get($data, 'totalAssets.raw');

        $this->yield = Arr::get($data, 'yield.raw');

        $this->fundFamily = $data['fundFamily'] ?? null;

        $this->fundInceptionDate = Arr::get($data, 'fundInceptionDate.fmt');

        $this->legalType = $data['legalType'] ?? null;

        $this->threeYearAverageReturn = Arr::get($data, 'threeYearAverageReturn.raw');

        $this->fiveYearAverageReturn = Arr::get($data, 'fiveYearAverageReturn.raw');

        $this->priceToSalesTrailingTwelveMonths = Arr::get($data, 'priceToSalesTrailing12Months.raw');

        $this->lastFiscalYearEnd = Arr::get($data, 'lastFiscalYearEnd.fmt');

        $this->nextFiscalYearEnd = Arr::get($data, 'nextFiscalYearEnd.fmt');

        $this->mostRecentQuarter = Arr::get($data, 'mostRecentQuarter.fmt');

        $this->earningsQuarterlyGrowth = Arr::get($data, 'earningsQuarterlyGrowth.raw');

        $this->revenueQuarterlyGrowth = Arr::get($data, 'revenueQuarterlyGrowth.raw');

        $this->netIncomeToCommon = Arr::get($data, 'netIncomeToCommon.raw');

        $this->trailingEps = Arr::get($data, 'trailingEps.raw');

        $this->forwardEps = Arr::get($data, 'forwardEps.raw');

        $this->pegRatio = Arr::get($data, 'pegRatio.raw');

        $this->lastSplitFactor = $data['lastSplitFactor'] ?? null;

        $this->lastSplitDate = Arr::get($data, 'lastSplitDate.fmt');

        $this->enterpriseToRevenue = Arr::get($data, 'enterpriseToRevenue.raw');

        $this->enterpriseToEbitda = Arr::get($data, 'enterpriseToEbitda.raw');

        $this->fiftyTwoWeekChange = Arr::get($data, '52WeekChange.raw');

        $this->sAndPFiftyTwoWeekChange = Arr::get($data, 'SandP52WeekChange.raw');

        $this->lastDividendValue = Arr::get($data, 'lastDividendValue.raw');

        $this->lastDividendDate = Arr::get($data, 'lastDividendDate.fmt');

        $this->lastCapitalGain = Arr::get($data, 'lastCapGain.raw');

        $this->annualHoldingsTurnover = Arr::get($data, 'annualHoldingsTurnover.raw');
    }

    /**
     * @inheritDoc
     */
    public function priceHint()
    {
        return $this->priceHint;
    }

    /**
     * @inheritDoc
     */
    public function enterpriseValue()
    {
        return $this->enterpriseValue;
    }

    /**
     * @inheritDoc
     */
    public function forwardPE()
    {
        return $this->forwardPE;
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
    public function floatShares()
    {
        return $this->floatShares;
    }

    /**
     * @inheritDoc
     */
    public function sharesOutstanding()
    {
        return $this->sharesOutstanding;
    }

    /**
     * @inheritDoc
     */
    public function sharesShort()
    {
        return $this->sharesShort;
    }

    /**
     * @inheritDoc
     */
    public function sharesShortPriorMonth()
    {
        return $this->sharesShortPriorMonth;
    }

    /**
     * @inheritDoc
     */
    public function sharesShortPreviousMonthDate()
    {
        return $this->sharesShortPreviousMonthDate;
    }

    /**
     * @inheritDoc
     */
    public function dateShortInterest()
    {
        return $this->dateShortInterest;
    }

    /**
     * @inheritDoc
     */
    public function sharesPercentSharesOut()
    {
        return $this->sharesPercentSharesOut;
    }

    /**
     * @inheritDoc
     */
    public function heldPercentInsiders()
    {
        return $this->heldPercentInsiders;
    }

    /**
     * @inheritDoc
     */
    public function heldPercentInstitutions()
    {
        return $this->heldPercentInstitutions;
    }

    /**
     * @inheritDoc
     */
    public function shortRatio()
    {
        return $this->shortRatio;
    }

    /**
     * @inheritDoc
     */
    public function shortPercentOfFloat()
    {
        return $this->shortPercentOfFloat;
    }

    /**
     * @inheritDoc
     */
    public function beta()
    {
        return $this->beta;
    }

    /**
     * @inheritDoc
     */
    public function impliedSharesOutstanding()
    {
        return $this->impliedSharesOutstanding;
    }

    /**
     * @inheritDoc
     */
    public function morningStarOverallRating()
    {
        return $this->morningStarOverallRating;
    }

    /**
     * @inheritDoc
     */
    public function morningStarRiskRating()
    {
        return $this->morningStarRiskRating;
    }

    /**
     * @inheritDoc
     */
    public function category()
    {
        return $this->category;
    }

    /**
     * @inheritDoc
     */
    public function bookValue()
    {
        return $this->bookValue;
    }

    /**
     * @inheritDoc
     */
    public function priceToBook()
    {
        return $this->priceToBook;
    }

    /**
     * @inheritDoc
     */
    public function annualReportExpenseRatio()
    {
        return $this->annualReportExpenseRatio;
    }

    /**
     * @inheritDoc
     */
    public function yearToDateReturn()
    {
        return $this->yearToDateReturn;
    }

    /**
     * @inheritDoc
     */
    public function betaThreeYear()
    {
        return $this->betaThreeYear;
    }

    /**
     * @inheritDoc
     */
    public function totalAssets()
    {
        return $this->totalAssets;
    }

    /**
     * @inheritDoc
     */
    public function yield()
    {
        return $this->yield;
    }

    /**
     * @inheritDoc
     */
    public function fundFamily()
    {
        return $this->fundFamily;
    }

    /**
     * @inheritDoc
     */
    public function fundInceptionDate()
    {
        return $this->fundInceptionDate;
    }

    /**
     * @inheritDoc
     */
    public function legalType()
    {
        return $this->legalType;
    }

    /**
     * @inheritDoc
     */
    public function threeYearAverageReturn()
    {
        return $this->threeYearAverageReturn;
    }

    /**
     * @inheritDoc
     */
    public function fiveYearAverageReturn()
    {
        return $this->fiveYearAverageReturn;
    }

    /**
     * @inheritDoc
     */
    public function priceToSalesTrailingTwelveMonths()
    {
        return $this->priceToSalesTrailingTwelveMonths;
    }

    /**
     * @inheritDoc
     */
    public function lastFiscalYearEnd()
    {
        return $this->lastFiscalYearEnd;
    }

    /**
     * @inheritDoc
     */
    public function nextFiscalYearEnd()
    {
        return $this->nextFiscalYearEnd;
    }

    /**
     * @inheritDoc
     */
    public function mostRecentQuarter()
    {
        return $this->mostRecentQuarter;
    }

    /**
     * @inheritDoc
     */
    public function earningsQuarterlyGrowth()
    {
        return $this->earningsQuarterlyGrowth;
    }

    /**
     * @inheritDoc
     */
    public function revenueQuarterlyGrowth()
    {
        return $this->revenueQuarterlyGrowth;
    }

    /**
     * @inheritDoc
     */
    public function netIncomeToCommon()
    {
        return $this->netIncomeToCommon;
    }

    /**
     * @inheritDoc
     */
    public function trailingEps()
    {
        return $this->trailingEps;
    }

    /**
     * @inheritDoc
     */
    public function forwardEps()
    {
        return $this->forwardEps;
    }

    /**
     * @inheritDoc
     */
    public function pegRatio()
    {
        return $this->pegRatio;
    }

    /**
     * @inheritDoc
     */
    public function lastSplitFactor()
    {
        return $this->lastSplitFactor;
    }

    /**
     * @inheritDoc
     */
    public function lastSplitDate()
    {
        return $this->lastSplitDate;
    }

    /**
     * @inheritDoc
     */
    public function enterpriseToRevenue()
    {
        return $this->enterpriseToRevenue;
    }

    /**
     * @inheritDoc
     */
    public function enterpriseToEbitda()
    {
        return $this->enterpriseToEbitda;
    }

    /**
     * @inheritDoc
     */
    public function fiftyTwoWeekChange()
    {
        return $this->fiftyTwoWeekChange;
    }

    /**
     * @inheritDoc
     */
    public function sAndPFiftyTwoWeekChange()
    {
        return $this->sAndPFiftyTwoWeekChange;
    }

    /**
     * @inheritDoc
     */
    public function lastDividendValue()
    {
        return $this->lastDividendValue;
    }

    /**
     * @inheritDoc
     */
    public function lastDividendDate()
    {
        return $this->lastDividendDate;
    }

    /**
     * @inheritDoc
     */
    public function lastCapitalGain()
    {
        return $this->lastCapitalGain;
    }

    /**
     * @inheritDoc
     */
    public function annualHoldingsTurnover()
    {
        return $this->annualHoldingsTurnover;
    }
}
