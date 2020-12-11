<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EstimateInterface;

class Estimate implements EstimateInterface
{
    /**
     * @var string|null
     */
    protected $period;

    /**
     * @var float|null
     */
    protected $growth;

    /**
     * Estimate constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->period = $data['period'] ?? null;

        $this->growth = Arr::get($data, 'growth.raw');
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
    public function growth()
    {
        return $this->growth;
    }
}
