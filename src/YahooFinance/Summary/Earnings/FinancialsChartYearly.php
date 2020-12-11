<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\Earnings;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\FinancialsChartYearlyInterface;

class FinancialsChartYearly implements FinancialsChartYearlyInterface
{
    /**
     * @var int|null
     */
    protected $date;

    /**
     * @var float|null
     */
    protected $revenue;

    /**
     * @var float|null
     */
    protected $earnings;

    /**
     * FinancialsChartYearly constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->date = $data['date'] ?? null;

        $this->revenue = Arr::get($data, 'revenue.raw');

        $this->earnings = Arr::get($data, 'earnings.raw');
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
    public function revenue()
    {
        return $this->revenue;
    }

    /**
     * @inheritDoc
     */
    public function earnings()
    {
        return $this->earnings;
    }
}
