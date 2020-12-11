<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EarningsEstimateInterface;

class EarningsEstimate implements EarningsEstimateInterface
{
    /**
     * @var float|null
     */
    protected $avg;

    /**
     * @var float|null
     */
    protected $low;

    /**
     * @var float|null
     */
    protected $high;

    /**
     * @var float|null
     */
    protected $yearAgoEps;

    /**
     * @var int|null
     */
    protected $numberOfAnalysts;

    /**
     * @var float|null
     */
    protected $growth;

    /**
     * EarningsEstimate constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->avg = Arr::get($data, 'avg.raw');

        $this->low = Arr::get($data, 'low.raw');

        $this->high = Arr::get($data, 'high.raw');

        $this->yearAgoEps = Arr::get($data, 'yearAgoEps.raw');

        $this->numberOfAnalysts = Arr::get($data, 'numberOfAnalysts.raw');

        $this->growth = Arr::get($data, 'growth.raw');
    }

    /**
     * @inheritDoc
     */
    public function avg()
    {
        return $this->avg;
    }

    /**
     * @inheritDoc
     */
    public function low()
    {
        return $this->low;
    }

    /**
     * @inheritDoc
     */
    public function high()
    {
        return $this->high;
    }

    /**
     * @inheritDoc
     */
    public function yearAgoEps()
    {
        return $this->yearAgoEps;
    }

    /**
     * @inheritDoc
     */
    public function numberOfAnalysts()
    {
        return $this->numberOfAnalysts;
    }

    /**
     * @inheritDoc
     */
    public function growth()
    {
        return $this->growth;
    }
}
