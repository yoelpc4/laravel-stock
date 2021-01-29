<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\SummaryDetail;

interface SummaryDetailInterface
{
    /**
     * Get summary detail's price hint
     *
     * @return int|null
     */
    public function priceHint();

    /**
     * Get summary detail's previous close
     *
     * @return float|null
     */
    public function previousClose();

    /**
     * Get summary detail's open
     *
     * @return float|null
     */
    public function open();

    /**
     * Get summary detail's day low
     *
     * @return float|null
     */
    public function dayLow();

    /**
     * Get summary detail's day high
     *
     * @return float|null
     */
    public function dayHigh();

    /**
     * Get summary detail's regular market previous close
     *
     * @return float|null
     */
    public function regularMarketPreviousClose();

    /**
     * Get summary detail's regular market open
     *
     * @return float|null
     */
    public function regularMarketOpen();

    /**
     * Get summary detail's regular market day low
     *
     * @return float|null
     */
    public function regularMarketDayLow();

    /**
     * Get summary detail's regular market day high
     *
     * @return float|null
     */
    public function regularMarketDayHigh();

    /**
     * Get summary detail's dividend rate
     *
     * @return float|null
     */
    public function dividendRate();

    /**
     * Get summary detail's dividend yield (%)
     *
     * @return float|null
     */
    public function dividendYield();

    /**
     * Get summary detail's ex dividend date
     *
     * @return string|null
     */
    public function exDividendDate();

    /**
     * Get summary detail's payout ratio (%)
     *
     * @return float|null
     */
    public function payoutRatio();

    /**
     * Get summary detail's five year avg dividend yield
     *
     * @return float|null
     */
    public function fiveYearAvgDividendYield();

    /**
     * Get summary detail's beta
     *
     * @return float|null
     */
    public function beta();

    /**
     * Get summary detail's trailing PE
     *
     * @return float|null
     */
    public function trailingPE();

    /**
     * Get summary detail's forward PE
     *
     * @return float|null
     */
    public function forwardPE();

    /**
     * Get summary detail's volume
     *
     * @return int|null
     */
    public function volume();

    /**
     * Get summary detail's regular market volume
     *
     * @return int|null
     */
    public function regularMarketVolume();

    /**
     * Get summary detail's average volume
     *
     * @return int|null
     */
    public function averageVolume();

    /**
     * Get summary detail's average volume ten days
     *
     * @return int|null
     */
    public function averageVolumeTenDays();

    /**
     * Get summary detail's average daily volume ten day
     *
     * @return int|null
     */
    public function averageDailyVolumeTenDay();

    /**
     * Get summary detail's bid
     *
     * @return float|null
     */
    public function bid();

    /**
     * Get summary detail's ask
     *
     * @return float|null
     */
    public function ask();

    /**
     * Get summary detail's bid size
     *
     * @return int|null
     */
    public function bidSize();

    /**
     * Get summary detail's ask size
     *
     * @return int|null
     */
    public function askSize();

    /**
     * Get summary detail's market cap
     *
     * @return float|null
     */
    public function marketCap();

    /**
     * Get summary detail's yield
     *
     * @return float|null
     */
    public function yield();

    /**
     * Get summary detail's ytd return
     *
     * @return float|null
     */
    public function ytdReturn();

    /**
     * Get summary detail's total assets
     *
     * @return float|null
     */
    public function totalAssets();

    /**
     * Get summary detail's expire date
     *
     * @return string|null
     */
    public function expireDate();

    /**
     * Get summary detail's strike price
     *
     * @return float|null
     */
    public function strikePrice();

    /**
     * Get summary detail's open interest
     *
     * @return float|null
     */
    public function openInterest();

    /**
     * Get summary detail's fifty two week low
     *
     * @return float|null
     */
    public function fiftyTwoWeekLow();

    /**
     * Get summary detail's fifty two week high
     *
     * @return float|null
     */
    public function fiftyTwoWeekHigh();

    /**
     * Get summary detail's price to sales trailing twelve months
     *
     * @return float|null
     */
    public function priceToSalesTrailingTwelveMonths();

    /**
     * Get summary detail's fifty day average
     *
     * @return float|null
     */
    public function fiftyDayAverage();

    /**
     * Get summary detail's two hundred day average
     *
     * @return float|null
     */
    public function twoHundredDayAverage();

    /**
     * Get summary detail's trailing annual dividend rate
     *
     * @return float|null
     */
    public function trailingAnnualDividendRate();

    /**
     * Get summary detail's trailing annual dividend yield (%)
     *
     * @return float|null
     */
    public function trailingAnnualDividendYield();

    /**
     * Get summary detail's nav price
     *
     * @return float|null
     */
    public function navPrice();

    /**
     * Get summary detail's currency
     *
     * @return string|null
     */
    public function currency();

    /**
     * Get summary detail's from currency
     *
     * @return string|null
     */
    public function fromCurrency();

    /**
     * Get summary detail's to currency
     *
     * @return string|null
     */
    public function toCurrency();

    /**
     * Get summary detail's last market
     *
     * @return string|null
     */
    public function lastMarket();

    /**
     * Get summary detail's volume twenty four hour
     *
     * @return int|null
     */
    public function volumeTwentyFourHour();

    /**
     * Get summary detail's volume all currencies
     *
     * @return int|null
     */
    public function volumeAllCurrencies();

    /**
     * Get summary detail's circulating supply
     *
     * @return int|null
     */
    public function circulatingSupply();

    /**
     * Get summary detail's algorithm
     *
     * @return string|null
     */
    public function algorithm();

    /**
     * Get summary detail's max supply
     *
     * @return int|null
     */
    public function maxSupply();

    /**
     * Get summary detail's start date
     *
     * @return string|null
     */
    public function startDate();

    /**
     * Get summary detail's tradeable
     *
     * @return boolean|null
     */
    public function tradeable();
}
