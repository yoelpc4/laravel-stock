<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EpsTrendInterface;

class EpsTrend implements EpsTrendInterface
{
    /**
     * @var float|null
     */
    protected $current;

    /**
     * @var float|null
     */
    protected $sevenDaysAgo;

    /**
     * @var float|null
     */
    protected $thirtyDaysAgo;

    /**
     * @var float|null
     */
    protected $sixtyDaysAgo;

    /**
     * @var float|null
     */
    protected $ninetyDaysAgo;

    /**
     * EpsTrend constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->current = Arr::get($data, 'current.raw');

        $this->sevenDaysAgo = Arr::get($data, '7daysAgo.raw');

        $this->thirtyDaysAgo = Arr::get($data, '30daysAgo.raw');

        $this->sixtyDaysAgo = Arr::get($data, '60daysAgo.raw');

        $this->ninetyDaysAgo = Arr::get($data, '90daysAgo.raw');
    }

    /**
     * @inheritDoc
     */
    public function current()
    {
        return $this->current;
    }

    /**
     * @inheritDoc
     */
    public function sevenDaysAgo()
    {
        return $this->sevenDaysAgo;
    }

    /**
     * @inheritDoc
     */
    public function thirtyDaysAgo()
    {
        return $this->thirtyDaysAgo;
    }

    /**
     * @inheritDoc
     */
    public function sixtyDaysAgo()
    {
        return $this->sixtyDaysAgo;
    }

    /**
     * @inheritDoc
     */
    public function ninetyDaysAgo()
    {
        return $this->ninetyDaysAgo;
    }
}
