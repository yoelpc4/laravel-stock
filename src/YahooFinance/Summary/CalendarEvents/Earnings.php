<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\CalendarEvents;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents\EarningsInterface;

class Earnings implements EarningsInterface
{
    /**
     * @var array
     */
    protected $earningsDates;

    /**
     * @var float|null
     */
    protected $earningsAverage;

    /**
     * @var float|null
     */
    protected $earningsLow;

    /**
     * @var float|null
     */
    protected $earningsHigh;

    /**
     * @var float|null
     */
    protected $revenueAverage;

    /**
     * @var float|null
     */
    protected $revenueLow;

    /**
     * @var float|null
     */
    protected $revenueHigh;

    /**
     * Earnings constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->earningsDates = array_map(function (array $data) {
            return Arr::get($data, 'fmt');
        }, $data['earningsDate'] ?? []);

        $this->earningsAverage = Arr::get($data, 'earningsAverage.raw');

        $this->earningsLow = Arr::get($data, 'earningsLow.raw');

        $this->earningsHigh = Arr::get($data, 'earningsHigh.raw');

        $this->revenueAverage = Arr::get($data, 'revenueAverage.raw');

        $this->revenueLow = Arr::get($data, 'revenueLow.raw');

        $this->revenueHigh = Arr::get($data, 'revenueHigh.raw');
    }

    /**
     * @inheritDoc
     */
    public function earningsDates()
    {
        return $this->earningsDates;
    }

    /**
     * @inheritDoc
     */
    public function earningsAverage()
    {
        return $this->earningsAverage;
    }

    /**
     * @inheritDoc
     */
    public function earningsLow()
    {
        return $this->earningsLow;
    }

    /**
     * @inheritDoc
     */
    public function earningsHigh()
    {
        return $this->earningsHigh;
    }

    /**
     * @inheritDoc
     */
    public function revenueAverage()
    {
        return $this->revenueAverage;
    }

    /**
     * @inheritDoc
     */
    public function revenueLow()
    {
        return $this->revenueLow;
    }

    /**
     * @inheritDoc
     */
    public function revenueHigh()
    {
        return $this->revenueHigh;
    }
}
