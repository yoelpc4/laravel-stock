<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsTrend;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend\TrendInterface;

class Trend implements TrendInterface
{
    /**
     * @var string|null
     */
    protected $period;

    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var float|null
     */
    protected $growth;

    /**
     * @var EarningsEstimate|null
     */
    protected $earningsEstimate;

    /**
     * @var RevenueEstimate|null
     */
    protected $revenueEstimate;

    /**
     * @var EpsTrend|null
     */
    protected $epsTrend;

    /**
     * @var EpsRevisions|null
     */
    protected $epsRevisions;

    /**
     * Trend constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->period = $data['period'] ?? null;

        $this->endDate = $data['endDate'] ?? null;

        $this->growth = Arr::get($data, 'growth.raw');

        $earningsEstimate = $data['earningsEstimate'] ?? null;

        if ($earningsEstimate) {
            $this->earningsEstimate = new EarningsEstimate($earningsEstimate);
        }

        $revenueEstimate = $data['revenueEstimate'] ?? null;

        if ($revenueEstimate) {
            $this->revenueEstimate = new RevenueEstimate($revenueEstimate);
        }

        $epsTrend = $data['epsTrend'] ?? null;

        if ($epsTrend) {
            $this->epsTrend = new EpsTrend($epsTrend);
        }

        $epsRevisions = $data['epsRevisions'] ?? null;

        if ($epsRevisions) {
            $this->epsRevisions = new EpsRevisions($epsRevisions);
        }
    }

    /**
     * @inheritDoc
     */
    public function period()
    {
        return $this->period;
    }

    /**
     * @inheritDoc
     */
    public function endDate()
    {
        return $this->endDate;
    }

    /**
     * @inheritDoc
     */
    public function growth()
    {
        return $this->growth;
    }

    /**
     * @inheritDoc
     */
    public function earningsEstimate()
    {
        return $this->earningsEstimate;
    }

    /**
     * @inheritDoc
     */
    public function revenueEstimate()
    {
        return $this->revenueEstimate;
    }

    /**
     * @inheritDoc
     */
    public function epsTrend()
    {
        return $this->epsTrend;
    }

    /**
     * @inheritDoc
     */
    public function epsRevisions()
    {
        return $this->epsRevisions;
    }
}
