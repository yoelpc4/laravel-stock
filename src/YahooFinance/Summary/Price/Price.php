<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\Price;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\Price\PriceInterface;

class Price implements PriceInterface
{
    /**
     * @var float|null
     */
    protected $preMarketChangePercent;

    /**
     * @var float|null
     */
    protected $preMarketChange;

    /**
     * @var int|null
     */
    protected $preMarketTime;

    /**
     * @var float|null
     */
    protected $preMarketPrice;

    /**
     * @var string|null
     */
    protected $preMarketSource;

    /**
     * @var float|null
     */
    protected $postMarketChangePercent;

    /**
     * @var float|null
     */
    protected $postMarketChange;

    /**
     * @var int|null
     */
    protected $postMarketTime;

    /**
     * @var float|null
     */
    protected $postMarketPrice;

    /**
     * @var string|null
     */
    protected $postMarketSource;

    /**
     * @var float|null
     */
    protected $regularMarketChangePercent;

    /**
     * @var float|null
     */
    protected $regularMarketChange;

    /**
     * @var int|null
     */
    protected $regularMarketTime;

    /**
     * @var int|null
     */
    protected $priceHint;

    /**
     * @var float|null
     */
    protected $regularMarketPrice;

    /**
     * @var float|null
     */
    protected $regularMarketDayHigh;

    /**
     * @var float|null
     */
    protected $regularMarketDayLow;

    /**
     * @var int|null
     */
    protected $regularMarketVolume;

    /**
     * @var int|null
     */
    protected $regularMarketDailyVolumeTenDay;

    /**
     * @var int|null
     */
    protected $regularMarketDailyVolumeThreeMonth;

    /**
     * @var float|null
     */
    protected $regularMarketPreviousClose;

    /**
     * @var string|null
     */
    protected $regularMarketSource;

    /**
     * @var float|null
     */
    protected $regularMarketOpen;

    /**
     * @var float|null
     */
    protected $strikePrice;

    /**
     * @var float|null
     */
    protected $openInterest;

    /**
     * @var string|null
     */
    protected $exchange;

    /**
     * @var string|null
     */
    protected $exchangeName;

    /**
     * @var int|null
     */
    protected $exchangeDataDelayedBy;

    /**
     * @var string|null
     */
    protected $marketState;

    /**
     * @var string|null
     */
    protected $quoteType;

    /**
     * @var string|null
     */
    protected $symbol;

    /**
     * @var string|null
     */
    protected $underlyingSymbol;

    /**
     * @var string|null
     */
    protected $shortName;

    /**
     * @var string|null
     */
    protected $longName;

    /**
     * @var string|null
     */
    protected $currency;

    /**
     * @var string|null
     */
    protected $quoteSourceName;

    /**
     * @var string|null
     */
    protected $currencySymbol;

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
     * @var int|null
     */
    protected $marketCap;

    /**
     * Price constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->preMarketChangePercent = Arr::get($data, 'preMarketChangePercent.raw');

        $this->preMarketChange = Arr::get($data, 'preMarketChange.raw');

        $this->preMarketTime = $data['preMarketTime'] ?? null;

        $this->preMarketPrice = Arr::get($data, 'preMarketPrice.raw');

        $this->preMarketSource = $data['preMarketSource'] ?? null;

        $this->postMarketChangePercent = Arr::get($data, 'postMarketChangePercent.raw');

        $this->postMarketChange = Arr::get($data, 'postMarketChange.raw');

        $this->postMarketTime = $data['postMarketTime'] ?? null;

        $this->postMarketPrice = Arr::get($data, 'postMarketPrice.raw');

        $this->postMarketSource = $data['postMarketSource'] ?? null;

        $this->regularMarketChange = Arr::get($data, 'regularMarketChange.raw');

        $this->regularMarketTime = $data['regularMarketTime'] ?? null;

        $this->regularMarketPrice = Arr::get($data, 'regularMarketPrice.raw');

        $this->regularMarketSource = $data['regularMarketSource'] ?? null;

        $this->priceHint = Arr::get($data, 'priceHint.raw');
        
        $this->regularMarketPrice = Arr::get($data, 'regularMarketPrice.raw');
        
        $this->regularMarketDayHigh = Arr::get($data, 'regularMarketDayHigh.raw');
        
        $this->regularMarketDayLow = Arr::get($data, 'regularMarketDayLow.raw');
        
        $this->regularMarketVolume = Arr::get($data, 'regularMarketVolume.raw');
        
        $this->regularMarketDailyVolumeTenDay = Arr::get($data, 'regularMarketDailyVolumeTenDay.raw');

        $this->regularMarketDailyVolumeThreeMonth = Arr::get($data, 'regularMarketDailyVolumeThreeMonth.raw');

        $this->regularMarketPreviousClose = Arr::get($data, 'regularMarketPreviousClose.raw');

        $this->regularMarketSource = $data['regularMarketSource'] ?? null;

        $this->regularMarketOpen = Arr::get($data, 'regularMarketOpen.raw');

        $this->strikePrice = Arr::get($data, 'strikePrice.raw');

        $this->openInterest = Arr::get($data, 'openInterest.raw');

        $this->exchange = $data['exchange'] ?? null;

        $this->exchangeName = $data['exchangeName'] ?? null;

        $this->exchangeDataDelayedBy = $data['exchangeDataDelayedBy'] ?? null;

        $this->marketState = $data['marketState'] ?? null;

        $this->quoteType = $data['quoteType'] ?? null;

        $this->symbol = $data['symbol'] ?? null;

        $this->underlyingSymbol = $data['underlyingSymbol'] ?? null;

        $this->shortName = $data['shortName'] ?? null;

        $this->longName = $data['longName'] ?? null;

        $this->currency = $data['currency'] ?? null;

        $this->quoteSourceName = $data['quoteSourceName'] ?? null;

        $this->currencySymbol = $data['currencySymbol'] ?? null;

        $this->fromCurrency = $data['fromCurrency'] ?? null;

        $this->toCurrency = $data['toCurrency'] ?? null;

        $this->lastMarket = $data['lastMarket'] ?? null;

        $this->volumeTwentyFourHour = Arr::get($data, 'volumeTwentyFourHour.raw');

        $this->volumeAllCurrencies = Arr::get($data, 'volumeAllCurrencies.raw');

        $this->circulatingSupply = Arr::get($data, 'circulatingSupply.raw');

        $this->marketCap = Arr::get($data, 'marketCap.raw');
    }

    /**
     * @inheritDoc
     */
    public function preMarketChangePercent()
    {
        return $this->preMarketChangePercent;
    }

    /**
     * @inheritDoc
     */
    public function preMarketChange()
    {
        return $this->preMarketChange;
    }

    /**
     * @inheritDoc
     */
    public function preMarketTime()
    {
        return $this->preMarketTime;
    }

    /**
     * @inheritDoc
     */
    public function preMarketPrice()
    {
        return $this->preMarketPrice;
    }

    /**
     * @inheritDoc
     */
    public function preMarketSource()
    {
        return $this->preMarketSource;
    }

    /**
     * @inheritDoc
     */
    public function postMarketChangePercent()
    {
        return $this->postMarketChangePercent;
    }

    /**
     * @inheritDoc
     */
    public function postMarketChange()
    {
        return $this->postMarketChange;
    }

    /**
     * @inheritDoc
     */
    public function postMarketTime()
    {
        return $this->postMarketTime;
    }

    /**
     * @inheritDoc
     */
    public function postMarketPrice()
    {
        return $this->postMarketPrice;
    }

    /**
     * @inheritDoc
     */
    public function postMarketSource()
    {
        return $this->postMarketSource;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketChangePercent()
    {
        return $this->regularMarketChangePercent;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketChange()
    {
        return $this->regularMarketChange;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketTime()
    {
        return $this->regularMarketTime;
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
    public function regularMarketPrice()
    {
        return $this->regularMarketPrice;
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
    public function regularMarketDayLow()
    {
        return $this->regularMarketDayLow;
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
    public function regularMarketDailyVolumeTenDay()
    {
        return $this->regularMarketDailyVolumeTenDay;
    }

    /**
     * @inheritDoc
     */
    public function regularMarketDailyVolumeThreeMonth()
    {
        return $this->regularMarketDailyVolumeThreeMonth;
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
    public function regularMarketSource()
    {
        return $this->regularMarketSource;
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
    public function exchange()
    {
        return $this->exchange;
    }

    /**
     * @inheritDoc
     */
    public function exchangeName()
    {
        return $this->exchangeName;
    }

    /**
     * @inheritDoc
     */
    public function exchangeDataDelayedBy()
    {
        return $this->exchangeDataDelayedBy;
    }

    /**
     * @inheritDoc
     */
    public function marketState()
    {
        return $this->marketState;
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
    public function symbol()
    {
        return $this->symbol;
    }

    /**
     * @inheritDoc
     */
    public function underlyingSymbol()
    {
        return $this->underlyingSymbol;
    }

    /**
     * @inheritDoc
     */
    public function shortName()
    {
        return $this->shortName;
    }

    /**
     * @inheritDoc
     */
    public function longName()
    {
        return $this->longName;
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
    public function quoteSourceName()
    {
        return $this->quoteSourceName;
    }

    /**
     * @inheritDoc
     */
    public function currencySymbol()
    {
        return $this->currencySymbol;
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
    public function marketCap()
    {
        return $this->marketCap;
    }
}
