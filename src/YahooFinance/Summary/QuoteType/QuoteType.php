<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\QuoteType;

use Yoelpc4\LaravelStock\Contracts\Summary\QuoteType\QuoteTypeInterface;

class QuoteType implements QuoteTypeInterface
{
    /**
     * @var string|null
     */
    protected $exchange;

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
     * @var int|null
     */
    protected $firstTradeDateEpochUtc;

    /**
     * @var string|null
     */
    protected $timeZoneFullName;

    /**
     * @var string|null
     */
    protected $timeZoneShortName;

    /**
     * @var string|null
     */
    protected $uuid;

    /**
     * @var string|null
     */
    protected $messageBoardId;

    /**
     * @var int|null
     */
    protected $gmtOffsetMilliseconds;

    /**
     * QuoteType constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->exchange = $data['exchange'] ?? null;

        $this->quoteType = $data['quoteType'] ?? null;

        $this->symbol = $data['symbol'] ?? null;

        $this->underlyingSymbol = $data['underlyingSymbol'] ?? null;

        $this->shortName = $data['shortName'] ?? null;

        $this->longName = $data['longName'] ?? null;

        $this->firstTradeDateEpochUtc = $data['firstTradeDateEpochUtc'] ?? null;

        $this->timeZoneFullName = $data['timeZoneFullName'] ?? null;

        $this->timeZoneShortName = $data['timeZoneShortName'] ?? null;

        $this->uuid = $data['uuid'] ?? null;

        $this->messageBoardId = $data['messageBoardId'] ?? null;

        $this->gmtOffsetMilliseconds = $data['gmtOffSetMilliseconds'] ?? null;
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
    public function firstTradeDateEpochUtc()
    {
        return $this->firstTradeDateEpochUtc;
    }

    /**
     * @inheritDoc
     */
    public function timeZoneFullName()
    {
        return $this->timeZoneFullName;
    }

    /**
     * @inheritDoc
     */
    public function timeZoneShortName()
    {
        return $this->timeZoneShortName;
    }

    /**
     * @inheritDoc
     */
    public function uuid()
    {
        return $this->uuid;
    }

    /**
     * @inheritDoc
     */
    public function messageBoardId()
    {
        return $this->messageBoardId;
    }

    /**
     * @inheritDoc
     */
    public function gmtOffsetMilliseconds()
    {
        return $this->gmtOffsetMilliseconds;
    }
}
