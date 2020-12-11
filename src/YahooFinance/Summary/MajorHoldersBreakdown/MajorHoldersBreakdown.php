<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\MajorHoldersBreakdown;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\MajorHoldersBreakdown\MajorHoldersBreakdownInterface;

class MajorHoldersBreakdown implements MajorHoldersBreakdownInterface
{
    /**
     * @var float|null
     */
    protected $insidersPercentHeld;

    /**
     * @var float|null
     */
    protected $institutionsPercentHeld;

    /**
     * @var float|null
     */
    protected $institutionsFloatPercentHeld;

    /**
     * @var int|null
     */
    protected $institutionsCount;

    /**
     * MajorHoldersBreakdown constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->insidersPercentHeld = Arr::get($data, 'insidersPercentHeld.raw');

        $this->institutionsPercentHeld = Arr::get($data, 'institutionsPercentHeld.raw');

        $this->institutionsFloatPercentHeld = Arr::get($data, 'institutionsFloatPercentHeld.raw');

        $this->institutionsCount = Arr::get($data, 'institutionsCount.raw');
    }

    /**
     * @inheritDoc
     */
    public function insidersPercentHeld()
    {
        return $this->insidersPercentHeld;
    }

    /**
     * @inheritDoc
     */
    public function institutionsPercentHeld()
    {
        return $this->institutionsPercentHeld;
    }

    /**
     * @inheritDoc
     */
    public function institutionsFloatPercentHeld()
    {
        return $this->institutionsFloatPercentHeld;
    }

    /**
     * @inheritDoc
     */
    public function institutionsCount()
    {
        return $this->institutionsCount;
    }
}
