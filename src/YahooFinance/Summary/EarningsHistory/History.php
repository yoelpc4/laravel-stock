<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsHistory;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory\HistoryInterface;

class History implements HistoryInterface
{
    /**
     * @var float|null
     */
    protected $period;

    /**
     * @var float|null
     */
    protected $quarter;

    /**
     * @var float|null
     */
    protected $epsActual;

    /**
     * @var float|null
     */
    protected $epsEstimate;

    /**
     * @var float|null
     */
    protected $epsDifference;

    /**
     * @var float|null
     */
    protected $surprisePercent;

    /**
     * History constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->period = $data['period'] ?? null;

        $this->quarter = Arr::get($data, 'quarter.fmt');

        $this->epsActual = Arr::get($data, 'epsActual.raw');

        $this->epsEstimate = Arr::get($data, 'epsEstimate.raw');

        $this->epsDifference = Arr::get($data, 'epsDifference.raw');

        $this->surprisePercent = Arr::get($data, 'surprisePercent.raw');
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
    public function quarter()
    {
        return $this->quarter;
    }

    /**
     * @inheritDoc
     */
    public function epsActual()
    {
        return $this->epsActual;
    }

    /**
     * @inheritDoc
     */
    public function epsEstimate()
    {
        return $this->epsEstimate;
    }

    /**
     * @inheritDoc
     */
    public function epsDifference()
    {
        return $this->epsDifference;
    }

    /**
     * @inheritDoc
     */
    public function surprisePercent()
    {
        return $this->surprisePercent;
    }
}
