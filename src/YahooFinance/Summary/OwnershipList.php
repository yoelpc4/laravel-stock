<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\OwnershipListInterface;

class OwnershipList implements OwnershipListInterface
{
    /**
     * @var string|null
     */
    protected $reportDate;

    /**
     * @var string|null
     */
    protected $organization;

    /**
     * @var float|null
     */
    protected $percentHeld;

    /**
     * @var float|null
     */
    protected $position;

    /**
     * @var float|null
     */
    protected $value;

    /**
     * OwnershipList constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->reportDate = Arr::get($data, 'reportDate.fmt');

        $this->organization = $data['organization'] ?? null;

        $this->percentHeld = Arr::get($data, 'pctHeld.raw');

        $this->position = Arr::get($data, 'position.raw');

        $this->value = Arr::get($data, 'value.raw');
    }

    /**
     * @inheritDoc
     */
    public function reportDate()
    {
        return $this->reportDate;
    }

    /**
     * @inheritDoc
     */
    public function organization()
    {
        return $this->organization;
    }

    /**
     * @inheritDoc
     */
    public function percentHeld()
    {
        return $this->percentHeld;
    }

    /**
     * @inheritDoc
     */
    public function position()
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function value()
    {
        return $this->value;
    }
}
