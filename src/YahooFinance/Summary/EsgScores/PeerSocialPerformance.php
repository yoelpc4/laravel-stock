<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EsgScores;

use Yoelpc4\LaravelStock\Contracts\Summary\EsgScores\PeerSocialPerformanceInterface;

class PeerSocialPerformance implements PeerSocialPerformanceInterface
{
    /**
     * @var float|null
     */
    protected $min;

    /**
     * @var float|null
     */
    protected $avg;

    /**
     * @var float|null
     */
    protected $max;

    /**
     * PeerSocialPerformance constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->min = $data['min'] ?? null;

        $this->avg = $data['avg'] ?? null;

        $this->max = $data['max'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function min()
    {
        $this->min;
    }

    /**
     * @inheritDoc
     */
    public function avg()
    {
        $this->avg;
    }

    /**
     * @inheritDoc
     */
    public function max()
    {
        $this->max;
    }
}
