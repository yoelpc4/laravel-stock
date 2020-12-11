<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\Earnings;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsChartQuarterlyInterface;

class EarningsChartQuarterly implements EarningsChartQuarterlyInterface
{
    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var float|null
     */
    protected $actual;

    /**
     * @var float|null
     */
    protected $estimate;

    /**
     * EarningsChartQuarterly constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->date = $data['date'] ?? null;

        $this->actual = Arr::get($data, 'actual.raw');

        $this->estimate = Arr::get($data, 'estimate.raw');
    }

    /**
     * @inheritDoc
     */
    public function date()
    {
        return $this->date;
    }

    /**
     * @inheritDoc
     */
    public function actual()
    {
        return $this->actual;
    }

    /**
     * @inheritDoc
     */
    public function estimate()
    {
        return $this->estimate;
    }
}
