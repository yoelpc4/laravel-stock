<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\EpsRevisionsInterface;

class EpsRevisions implements EpsRevisionsInterface
{
    /**
     * @var float|null
     */
    protected $upLastSevenDays;

    /**
     * @var float|null
     */
    protected $upLastThirtyDays;

    /**
     * @var float|null
     */
    protected $downLastThirtyDays;

    /**
     * @var float|null
     */
    protected $downLastNinetyDays;

    /**
     * EpsRevisions constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->upLastSevenDays = Arr::get($data, 'upLast7days.raw');

        $this->upLastThirtyDays = Arr::get($data, 'upLast30days.raw');

        $this->downLastThirtyDays = Arr::get($data, 'downLast30days.raw');

        $this->downLastNinetyDays = Arr::get($data, 'downLast90days.raw');
    }

    /**
     * @inheritDoc
     */
    public function upLastSevenDays()
    {
        return $this->upLastSevenDays;
    }

    /**
     * @inheritDoc
     */
    public function upLastThirtyDays()
    {
        return $this->upLastThirtyDays;
    }

    /**
     * @inheritDoc
     */
    public function downLastThirtyDays()
    {
        return $this->downLastThirtyDays;
    }

    /**
     * @inheritDoc
     */
    public function downLastNinetyDays()
    {
        return $this->downLastNinetyDays;
    }
}
