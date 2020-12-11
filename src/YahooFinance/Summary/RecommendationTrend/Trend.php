<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\RecommendationTrend;

use Yoelpc4\LaravelStock\Contracts\Summary\RecommendationTrend\TrendInterface;

class Trend implements TrendInterface
{
    /**
     * @var string|null
     */
    protected $period;

    /**
     * @var int|null
     */
    protected $strongBuy;

    /**
     * @var int|null
     */
    protected $buy;

    /**
     * @var int|null
     */
    protected $hold;

    /**
     * @var int|null
     */
    protected $sell;

    /**
     * @var int|null
     */
    protected $strongSell;

    /**
     * Trend constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->period = $data['period'] ?? null;

        $this->strongBuy = $data['strongBuy'] ?? null;

        $this->buy = $data['buy'] ?? null;

        $this->hold = $data['hold'] ?? null;

        $this->sell = $data['sell'] ?? null;

        $this->strongSell = $data['strongSell'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function period()
    {
        return $this->period;
    }

    /**
     * @inheritDoc
     */
    public function strongBuy()
    {
        return $this->strongBuy;
    }

    /**
     * @inheritDoc
     */
    public function buy()
    {
        return $this->buy;
    }

    /**
     * @inheritDoc
     */
    public function hold()
    {
        return $this->hold;
    }

    /**
     * @inheritDoc
     */
    public function sell()
    {
        return $this->sell;
    }

    /**
     * @inheritDoc
     */
    public function strongSell()
    {
        return $this->strongSell;
    }
}
