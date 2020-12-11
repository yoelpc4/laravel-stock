<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\NetSharePurchaseActivity;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\NetSharePurchaseActivity\NetSharePurchaseActivityInterface;

class NetSharePurchaseActivity implements NetSharePurchaseActivityInterface
{
    /**
     * @var string|null
     */
    protected $period;

    /**
     * @var int|null
     */
    protected $buyInfoCount;

    /**
     * @var int|null
     */
    protected $buyInfoShares;

    /**
     * @var float|null
     */
    protected $buyPercentInsiderShares;

    /**
     * @var int|null
     */
    protected $sellInfoCount;

    /**
     * @var int|null
     */
    protected $sellInfoShares;

    /**
     * @var float|null
     */
    protected $sellPercentInsiderShares;

    /**
     * @var int|null
     */
    protected $netInfoCount;

    /**
     * @var int|null
     */
    protected $netInfoShares;

    /**
     * @var float|null
     */
    protected $netPercentInsiderShares;

    /**
     * @var int|null
     */
    protected $totalInsiderShares;

    /**
     * NetSharePurchaseActivity constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->period = $data['period'] ?? null;

        $this->buyInfoCount = Arr::get($data, 'buyInfoCount.raw');

        $this->buyInfoShares = Arr::get($data, 'buyInfoShares.raw');

        $this->buyPercentInsiderShares = Arr::get($data, 'buyPercentInsiderShares.raw');

        $this->sellInfoCount = Arr::get($data, 'sellInfoCount.raw');

        $this->sellInfoShares = Arr::get($data, 'sellInfoShares.raw');

        $this->sellPercentInsiderShares = Arr::get($data, 'sellPercentInsiderShares.raw');

        $this->netInfoCount = Arr::get($data, 'netInfoCount.raw');

        $this->netInfoShares = Arr::get($data, 'netInfoShares.raw');

        $this->netPercentInsiderShares = Arr::get($data, 'netPercentInsiderShares.raw');

        $this->totalInsiderShares = Arr::get($data, 'totalInsiderShares.raw');
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
    public function buyInfoCount()
    {
        return $this->buyInfoCount;
    }

    /**
     * @inheritDoc
     */
    public function buyInfoShares()
    {
        return $this->buyInfoShares;
    }

    /**
     * @inheritDoc
     */
    public function buyPercentInsiderShares()
    {
        return $this->buyPercentInsiderShares;
    }

    /**
     * @inheritDoc
     */
    public function sellInfoCount()
    {
        return $this->sellInfoCount;
    }

    /**
     * @inheritDoc
     */
    public function sellInfoShares()
    {
        return $this->sellInfoShares;
    }

    /**
     * @inheritDoc
     */
    public function sellPercentInsiderShares()
    {
        return $this->sellPercentInsiderShares;
    }

    /**
     * @inheritDoc
     */
    public function netInfoCount()
    {
        return $this->netInfoCount;
    }

    /**
     * @inheritDoc
     */
    public function netInfoShares()
    {
        return $this->netInfoShares;
    }

    /**
     * @inheritDoc
     */
    public function netPercentInsiderShares()
    {
        return $this->netPercentInsiderShares;
    }

    /**
     * @inheritDoc
     */
    public function totalInsiderShares()
    {
        return $this->totalInsiderShares;
    }
}
