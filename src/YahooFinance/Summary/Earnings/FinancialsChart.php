<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\Earnings;

use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\FinancialsChartInterface;

class FinancialsChart implements FinancialsChartInterface
{
    /**
     * @var FinancialsChartYearly[]
     */
    protected $yearlies;

    /**
     * @var FinancialsChartQuarterly[]
     */
    protected $quarterlies;

    /**
     * FinancialsChart constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->yearlies = array_map(function (array $data) {
            return new FinancialsChartYearly($data);
        }, $data['yearly'] ?? []);

        $this->quarterlies = array_map(function (array $data) {
            return new FinancialsChartQuarterly($data);
        }, $data['quarterly'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function yearlies()
    {
        return $this->yearlies;
    }

    /**
     * @inheritDoc
     */
    public function quarterlies()
    {
        return $this->quarterlies;
    }
}
