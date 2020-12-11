<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\Earnings;

use Yoelpc4\LaravelStock\Contracts\Summary\Earnings\EarningsInterface;

class Earnings implements EarningsInterface
{
    /**
     * @var EarningsChart[]
     */
    protected $earningsChart;

    /**
     * @var FinancialsChart[]
     */
    protected $financialsChart;

    /**
     * @var string|null
     */
    protected $financialCurrency;

    /**
     * Earnings constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $earningsChart = $data['earningsChart'] ?? null;

        if ($earningsChart) {
            $this->earningsChart = new EarningsChart($earningsChart);
        }

        $financialsChart = $data['financialsChart'] ?? null;

        if ($financialsChart) {
            $this->financialsChart = new FinancialsChart($financialsChart);
        }

        $this->financialCurrency = $data['financialCurrency'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function earningsChart()
    {
        return $this->earningsChart;
    }

    /**
     * @inheritDoc
     */
    public function financialsChart()
    {
        return $this->financialsChart;
    }

    /**
     * @inheritDoc
     */
    public function financialCurrency()
    {
        return $this->financialCurrency;
    }
}
