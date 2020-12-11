<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\IndexTrend;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\IndexTrend\IndexTrendInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Estimate;

class IndexTrend implements IndexTrendInterface
{
    /**
     * @var string|null
     */
    protected $symbol;

    /**
     * @var float|null
     */
    protected $peRatio;

    /**
     * @var float|null
     */
    protected $pegRatio;

    /**
     * @var Estimate[]
     */
    protected $estimates;

    /**
     * IndustryTrend constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->symbol = $data['symbol'] ?? null;

        $this->peRatio = Arr::get($data, 'peRatio.raw');

        $this->pegRatio = Arr::get($data, 'pegRatio.raw');

        $this->estimates = array_map(function (array $data) {
            return new Estimate($data);
        }, $data['estimates'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function symbol()
    {
        return $this->symbol;
    }

    /**
     * @inheritDoc
     */
    public function peRatio()
    {
        return $this->peRatio;
    }

    /**
     * @inheritDoc
     */
    public function pegRatio()
    {
        return $this->pegRatio;
    }

    /**
     * @inheritDoc
     */
    public function estimates()
    {
        return $this->estimates;
    }
}
