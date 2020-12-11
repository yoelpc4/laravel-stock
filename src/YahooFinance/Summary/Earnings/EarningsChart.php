<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\Earnings;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsChartInterface;

class EarningsChart implements EarningsChartInterface
{
    /**
     * @var EarningsChartQuarterly[]
     */
    protected $quarterlies;

    /**
     * @var float|null
     */
    protected $currentQuarterEstimate;

    /**
     * @var string|null
     */
    protected $currentQuarterEstimateDate;

    /**
     * @var int|null
     */
    protected $currentQuarterEstimateYear;

    /**
     * @var array
     */
    protected $earningsDates;

    /**
     * EarningsChart constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->quarterlies = array_map(function (array $data) {
            return new EarningsChartQuarterly($data);
        }, $data['quarterly'] ?? []);

        $this->currentQuarterEstimate = Arr::get($data, 'currentQuarterEstimate.raw');

        $this->currentQuarterEstimateDate = $data['currentQuarterEstimateDate'] ?? null;

        $this->currentQuarterEstimateYear = $data['currentQuarterEstimateYear'] ?? null;

        $this->earningsDates = array_map(function (array $data) {
            return $data['fmt'] ?? null;
        }, $data['earningsDate'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function quarterlies()
    {
        return $this->quarterlies;
    }

    /**
     * @inheritDoc
     */
    public function currentQuarterEstimate()
    {
        return $this->currentQuarterEstimate;
    }

    /**
     * @inheritDoc
     */
    public function currentQuarterEstimateDate()
    {
        return $this->currentQuarterEstimateDate;
    }

    /**
     * @inheritDoc
     */
    public function currentQuarterEstimateYear()
    {
        return $this->currentQuarterEstimateYear;
    }

    /**
     * @inheritDoc
     */
    public function earningsDates()
    {
        return $this->earningsDates;
    }
}
