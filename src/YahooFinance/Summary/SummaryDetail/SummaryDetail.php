<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\SummaryDetail;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\SummaryDetail\SummaryDetailInterface;

class SummaryDetail implements SummaryDetailInterface
{
    /**
     * @var int|null
     */
    protected $priceHint;

    /**
     * @var float|null
     */
    protected $previousClose;

    /**
     * @var float|null
     */
    protected $open;

    /**
     * @var float|null
     */
    protected $dayLow;

    /**
     * @var float|null
     */
    protected $dayHigh;

    /**
     * @var float|null
     */
    protected $regularMarketPreviousClose;

    /**
     * @var float|null
     */
    protected $regularMarketOpen;

    /**
     * @var float|null
     */
    protected $regularMarketDayLow;

    /**
     * @var float|null
     */
    protected $regularMarketDayHigh;

    /**
     * @var float|null
     */
    protected $dividendRate;

    /**
     * @var float|null
     */
    protected $dividendYield;

    /**
     * @var string|null
     */
    protected $exDividendDate;

    /**
     * @var float|null
     */
    protected $payoutRatio;

    /**
     * @var float|null
     */
    protected $fiveYearAvgDividendYield;

    /**
     * @var float|null
     */
    protected $beta;

    /**
     * @var float|null
     */
    protected $trailingPE;

    /**
     * @var float|null
     */
    protected $forwardPE;

    /**
     * @var int|null
     */
    protected $volume;

    /**
     * @var int|null
     */
    protected $regularMarketVolume;

    /**
     * @var int|null
     */
    protected $averageVolume;

    /**
     * @var int|null
     */
    protected $averageVolumeTenDays;

    /**
     * @var int|null
     */
    protected $averageDailyVolumeTenDay;

    /**
     * @var float|null
     */
    protected $bid;

    /**
     * @var float|null
     */
    protected $ask;

    /**
     * @var int|null
     */
    protected $bidSize;

    /**
     * @var int|null
     */
    protected $askSize;

    /**
     * @var float|null
     */
    protected $marketCap;

    /**
     * @var float|null
     */
    protected $yield;

    /**
     * @var float|null
     */
    protected $ytdReturn;

    /**
     * @var float|null
     */
    protected $totalAssets;

    /**
     * @var string|null
     */
    protected $expireDate;

    /**
     * @var float|null
     */
    protected $strikePrice;

    /**
     * @var float|null
     */
    protected $openInterest;

    /**
     * @var float|null
     */
    protected $fiftyTwoWeekLow;

    /**
     * @var float|null
     */
    protected $fiftyTwoWeekHigh;

    /**
     * @var float|null
     */
    protected $priceToSalesTrailingTwelveMonths;

    /**
     * @var float|null
     */
    protected $fiftyDayAverage;

    /**
     * @var float|null
     */
    protected $twoHundredDayAverage;

    /**
     * @var float|null
     */
    protected $trailingAnnualDividendRate;

    /**
     * @var float|null
     */
    protected $trailingAnnualDividendYield;

    /**
     * @var float|null
     */
    protected $navPrice;

    /**
     * @var string|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $fromCurrency;

    /**
     * @var string|null
     */
    protected $toCurrency;

    /**
     * @var string|null
     */
    protected $lastMarket;

    /**
     * @var int|null
     */
    protected $volumeTwentyFourHour;

    /**
     * @var int|null
     */
    protected $volumeAllCurrencies;

    /**
     * @var int|null
     */
    protected $circulatingSupply;

    /**
     * @var string|null
     */
    protected $algorithm;

    /**
     * @var int|null
     */
    protected $maxSupply;

    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var boolean|null
     */
    protected $tradeable;

    /**
     * SummaryDetail constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->priceHint = Arr::get($data,'priceHint.raw');

        $this->previousClose = Arr::get($data,'previousClose.raw');

        $this->open = Arr::get($data,'open.raw');

        $this->dayLow = Arr::get($data,'dayLow.raw');

        $this->dayHigh = Arr::get($data,'dayLow.raw');

        $this->regularMarketPreviousClose = Arr::get($data,'regularMarketPreviousClose.raw');

        $this->regularMarketOpen = Arr::get($data,'regularMarketOpen.raw');

        $this->regularMarketDayLow = Arr::get($data,'regularMarketDayLow.raw');

        $this->regularMarketDayHigh = Arr::get($data,'regularMarketDayHigh.raw');

        $this->dividendRate = Arr::get($data,'dividendRate.raw');

        $this->dividendYield = Arr::get($data,'dividendYield.raw');

        $this->payoutRatio = Arr::get($data,'payoutRatio.raw');

        $this->fiveYearAvgDividendYield = Arr::get($data,'fiveYearAvgDividendYield.raw');

        $this->beta = Arr::get($data,'beta.raw');

        $this->trailingPE = Arr::get($data,'trailingPE.raw');

        $this->forwardPE = Arr::get($data,'forwardPE.raw');

        $this->volume = Arr::get($data,'volume.raw');

        $this->regularMarketVolume = Arr::get($data,'regularMarketVolume.raw');

        $this->averageVolume = Arr::get($data,'averageVolume.raw');

        $this->averageVolumeTenDays = Arr::get($data,'averageVolume10days.raw');

        $this->averageDailyVolumeTenDay = Arr::get($data,'averageDailyVolume10Day.raw');

        $this->bid = Arr::get($data,'bid.raw');

        $this->ask = Arr::get($data,'ask.raw');

        $this->bidSize = Arr::get($data,'bidSize.raw');

        $this->askSize = Arr::get($data,'askSize.raw');

        $this->marketCap = Arr::get($data,'marketCap.raw');

        $this->yield = Arr::get($data,'yield.raw');

        $this->ytdReturn = Arr::get($data,'ytdReturn.raw');

        $this->totalAssets = Arr::get($data,'totalAssets.raw');

        $this->expireDate = Arr::get($data,'expireDate.fmt');

        $this->strikePrice = Arr::get($data,'strikePrice.raw');

        $this->openInterest = Arr::get($data,'openInterest.raw');

        $this->fiftyTwoWeekLow = Arr::get($data,'fiftyTwoWeekLow.raw');

        $this->fiftyTwoWeekHigh = Arr::get($data,'fiftyTwoWeekHigh.raw');

        $this->priceToSalesTrailingTwelveMonths = Arr::get($data,'priceToSalesTrailing12Months.raw');

        $this->fiftyDayAverage = Arr::get($data,'fiftyDayAverage.raw');

        $this->twoHundredDayAverage = Arr::get($data,'twoHundredDayAverage.raw');

        $this->trailingAnnualDividendRate = Arr::get($data,'trailingAnnualDividendRate.raw');

        $this->trailingAnnualDividendYield = Arr::get($data,'trailingAnnualDividendYield.raw');

        $this->navPrice = Arr::get($data,'navPrice.raw');

        $this->currency = $data['currency'] ?? null;

        $this->fromCurrency = $data['fromCurrency'] ?? null;

        $this->toCurrency = $data['toCurrency'] ?? null;

        $this->lastMarket = $data['lastMarket'] ?? null;

        $this->volumeTwentyFourHour = $data['volume24Hr'] ?? null;

        $this->volumeAllCurrencies = Arr::get($data,'volumeAllCurrencies.raw');

        $this->circulatingSupply = Arr::get($data,'circulatingSupply.raw');

        $this->algorithm = $data['algorithm'] ?? null;

        $this->maxSupply = Arr::get($data,'maxSupply.raw');

        $this->startDate = Arr::get($data,'startDate.fmt');

        $this->tradeable = $data['tradeable'] ?? null;
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
    public function previousClose()
    {
        return $this->previousClose;
    }

    /**
     * @inheritDoc
     */
    public function open()
    {
        return $this->open;
    }

    /**
     * @inheritDoc
     */
    public function dayLow()
    {
        return $this->dayLow;
    }

    /**
     * @inheritDoc
     */
    public function dayHigh()
    {
        return $this->dayHigh;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketPreviousClose()
    {
        return $this->regularMarketPreviousClose;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketOpen()
    {
        return $this->regularMarketOpen;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketDayLow()
    {
        return $this->regularMarketDayLow;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketDayHigh()
    {
        return $this->regularMarketDayHigh;
    }

    /**
     * @inheritDoc
     */
    public function dividendRate()
    {
        return $this->dividendRate;
    }

    /**
     * @inheritDoc
     */
    public function dividendYield()
    {
        return $this->dividendYield;
    }

    /**
     * @inheritDoc
     */
    public function exDividendDate()
    {
        return $this->exDividendDate;
    }

    /**
     * @inheritDoc
     */
    public function payoutRatio()
    {
        return $this->payoutRatio;
    }

    /**
     * @inheritDoc
     */
    public function fiveYearAvgDividendYield()
    {
        return $this->fiveYearAvgDividendYield;
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
    public function trailingPE()
    {
        return $this->trailingPE;
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
    public function volume()
    {
        return $this->volume;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketVolume()
    {
        return $this->regularMarketVolume;
    }

    /**
     * @inheritDoc
     */
    public function averageVolume()
    {
        return $this->averageVolume;
    }

    /**
     * @inheritDoc
     */
    public function averageVolumeTenDays()
    {
        return $this->averageVolumeTenDays;
    }

    /**
     * @inheritDoc
     */
    public function averageDailyVolumeTenDay()
    {
        return $this->averageDailyVolumeTenDay;
    }

    /**
     * @inheritDoc
     */
    public function bid()
    {
        return $this->bid;
    }

    /**
     * @inheritDoc
     */
    public function ask()
    {
        return $this->ask;
    }

    /**
     * @inheritDoc
     */
    public function bidSize()
    {
        return $this->bidSize;
    }

    /**
     * @inheritDoc
     */
    public function askSize()
    {
        return $this->askSize;
    }

    /**
     * @inheritDoc
     */
    public function marketCap()
    {
        return $this->marketCap;
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
    public function ytdReturn()
    {
        return $this->ytdReturn;
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
    public function expireDate()
    {
        return $this->expireDate;
    }

    /**
     * @inheritDoc
     */
    public function strikePrice()
    {
        return $this->strikePrice;
    }

    /**
     * @inheritDoc
     */
    public function openInterest()
    {
        return $this->openInterest;
    }

    /**
     * @inheritDoc
     */
    public function fiftyTwoWeekLow()
    {
        return $this->fiftyTwoWeekLow;
    }

    /**
     * @inheritDoc
     */
    public function fiftyTwoWeekHigh()
    {
        return $this->fiftyTwoWeekHigh;
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
    public function fiftyDayAverage()
    {
        return $this->fiftyDayAverage;
    }

    /**
     * @inheritDoc
     */
    public function twoHundredDayAverage()
    {
        return $this->twoHundredDayAverage;
    }

    /**
     * @inheritDoc
     */
    public function trailingAnnualDividendRate()
    {
        return $this->trailingAnnualDividendRate;
    }

    /**
     * @inheritDoc
     */
    public function trailingAnnualDividendYield()
    {
        return $this->trailingAnnualDividendYield;
    }

    /**
     * @inheritDoc
     */
    public function navPrice()
    {
        return $this->navPrice;
    }

    /**
     * @inheritDoc
     */
    public function currency()
    {
        return $this->currency;
    }

    /**
     * @inheritDoc
     */
    public function fromCurrency()
    {
        return $this->fromCurrency;
    }

    /**
     * @inheritDoc
     */
    public function toCurrency()
    {
        return $this->toCurrency;
    }

    /**
     * @inheritDoc
     */
    public function lastMarket()
    {
        return $this->lastMarket;
    }

    /**
     * @inheritDoc
     */
    public function volumeTwentyFourHour()
    {
        return $this->volumeTwentyFourHour;
    }

    /**
     * @inheritDoc
     */
    public function volumeAllCurrencies()
    {
        return $this->volumeAllCurrencies;
    }

    /**
     * @inheritDoc
     */
    public function circulatingSupply()
    {
        return $this->circulatingSupply;
    }

    /**
     * @inheritDoc
     */
    public function algorithm()
    {
        return $this->algorithm;
    }

    /**
     * @inheritDoc
     */
    public function maxSupply()
    {
        return $this->maxSupply;
    }

    /**
     * @inheritDoc
     */
    public function startDate()
    {
        return $this->startDate;
    }

    /**
     * @inheritDoc
     */
    public function tradeable()
    {
        return $this->tradeable;
    }
}
