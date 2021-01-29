<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\QuoteType;

interface QuoteTypeInterface
{
    /**
     * Get quote type's exchange
     *
     * @return string|null
     */
    public function exchange();

    /**
     * Get quote type's quote type
     *
     * @return string|null
     */
    public function quoteType();

    /**
     * Get quote type's symbol
     *
     * @return string|null
     */
    public function symbol();

    /**
     * Get quote type's underlying symbol
     *
     * @return string|null
     */
    public function underlyingSymbol();

    /**
     * Get quote type's short name
     *
     * @return string|null
     */
    public function shortName();

    /**
     * Get quote type's long name
     *
     * @return string|null
     */
    public function longName();

    /**
     * Get quote type's first trade date epoch utc
     *
     * @return int|null
     */
    public function firstTradeDateEpochUtc();

    /**
     * Get quote type's time zone full name
     *
     * @return string|null
     */
    public function timeZoneFullName();

    /**
     * Get quote type's time zone short name
     *
     * @return string|null
     */
    public function timeZoneShortName();

    /**
     * Get quote type's uuid
     *
     * @return string|null
     */
    public function uuid();

    /**
     * Get quote type's message board id
     *
     * @return string|null
     */
    public function messageBoardId();

    /**
     * Get quote type's gmt offset milliseconds
     *
     * @return int|null
     */
    public function gmtOffsetMilliseconds();
}
