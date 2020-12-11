<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\RevenueEstimateInterface;

class RevenueEstimate implements RevenueEstimateInterface
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
    protected $yearAgoRevenue;

    /**
     * @var int|null
     */
    protected $numberOfAnalysts;

    /**
     * @var float|null
     */
    protected $growth;

    /**
     * RevenueEstimate constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->avg = Arr::get($data, 'avg.raw');

        $this->low = Arr::get($data, 'low.raw');

        $this->high = Arr::get($data, 'high.raw');

        $this->yearAgoRevenue = Arr::get($data, 'yearAgoRevenue.raw');

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
    public function yearAgoRevenue()
    {
        return $this->yearAgoRevenue;
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
