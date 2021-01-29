<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\Price;

interface PriceInterface
{
    /**
     * Get price's pre market change percent (%)
     *
     * @return float|null
     */
    public function preMarketChangePercent();

    /**
     * Get price's pre market change
     *
     * @return float|null
     */
    public function preMarketChange();

    /**
     * Get price's pre market time
     *
     * @return int|null
     */
    public function preMarketTime();

    /**
     * Get price's pre market price
     *
     * @return float|null
     */
    public function preMarketPrice();

    /**
     * Get price's source
     *
     * @return string|null
     */
    public function preMarketSource();

    /**
     * Get price's post market change percent (%)
     *
     * @return float|null
     */
    public function postMarketChangePercent();

    /**
     * Get price's post market change
     *
     * @return float|null
     */
    public function postMarketChange();

    /**
     * Get price's post market time
     *
     * @return int|null
     */
    public function postMarketTime();

    /**
     * Get price's post market price
     *
     * @return float|null
     */
    public function postMarketPrice();

    /**
     * Get price's post market source
     *
     * @return string|null
     */
    public function postMarketSource();

    /**
     * Get price's regular market change percent (%)
     *
     * @return float|null
     */
    public function regularMarketChangePercent();

    /**
     * Get price's regular market change
     *
     * @return float|null
     */
    public function regularMarketChange();

    /**
     * Get price's regular market time
     *
     * @return int|null
     */
    public function regularMarketTime();

    /**
     * Get price's price hint
     *
     * @return int|null
     */
    public function priceHint();

    /**
     * Get price's regular market price
     *
     * @return float|null
     */
    public function regularMarketPrice();

    /**
     * Get price's regular market day high
     *
     * @return float|null
     */
    public function regularMarketDayHigh();

    /**
     * Get price's regular market day low
     *
     * @return float|null
     */
    public function regularMarketDayLow();

    /**
     * Get price's regular market volume
     *
     * @return int|null
     */
    public function regularMarketVolume();

    /**
     * Get price's regular market daily volume ten day
     *
     * @return int|null
     */
    public function regularMarketDailyVolumeTenDay();

    /**
     * Get price's regular market daily volume three month
     *
     * @return int|null
     */
    public function regularMarketDailyVolumeThreeMonth();

    /**
     * Get price's regular market previous close
     *
     * @return float|null
     */
    public function regularMarketPreviousClose();

    /**
     * Get price's regular market source
     *
     * @return string|null
     */
    public function regularMarketSource();

    /**
     * Get price's regular market open
     *
     * @return float|null
     */
    public function regularMarketOpen();

    /**
     * Get price's strike price
     *
     * @return float|null
     */
    public function strikePrice();

    /**
     * Get price's open interest
     *
     * @return float|null
     */
    public function openInterest();

    /**
     * Get price's exchange
     *
     * @return string|null
     */
    public function exchange();

    /**
     * Get price's exchange name
     *
     * @return string|null
     */
    public function exchangeName();

    /**
     * Get price's exchange data delayed by
     *
     * @return int|null
     */
    public function exchangeDataDelayedBy();

    /**
     * Get price's market state
     *
     * @return string|null
     */
    public function marketState();

    /**
     * Get price's quote type
     *
     * @return string|null
     */
    public function quoteType();

    /**
     * Get price's symbol
     *
     * @return string|null
     */
    public function symbol();

    /**
     * Get price's underlying symbol
     *
     * @return string|null
     */
    public function underlyingSymbol();

    /**
     * Get price's short name
     *
     * @return string|null
     */
    public function shortName();

    /**
     * Get price's long name
     *
     * @return string|null
     */
    public function longName();

    /**
     * Get price's currency
     *
     * @return string|null
     */
    public function currency();

    /**
     * Get price's quote source name
     *
     * @return string|null
     */
    public function quoteSourceName();

    /**
     * Get price's currency symbol
     *
     * @return string|null
     */
    public function currencySymbol();

    /**
     * Get price's from currency
     *
     * @return string|null
     */
    public function fromCurrency();

    /**
     * Get price's to currency
     *
     * @return string|null
     */
    public function toCurrency();

    /**
     * Get price's last market
     *
     * @return string|null
     */
    public function lastMarket();

    /**
     * Get price's volume twenty four hour
     *
     * @return int|null
     */
    public function volumeTwentyFourHour();

    /**
     * Get price's volume all currencies
     *
     * @return int|null
     */
    public function volumeAllCurrencies();

    /**
     * Get price's circulating supply
     *
     * @return int|null
     */
    public function circulatingSupply();

    /**
     * Get price's market cap
     *
     * @return int|null
     */
    public function marketCap();
}
