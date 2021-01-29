<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\PageViews;

use Yoelpc4\LaravelStock\Contracts\Summary\PageViews\PageViewsInterface;

class PageViews implements PageViewsInterface
{
    /**
     * @var string|null
     */
    protected $shortTermTrend;

    /**
     * @var string|null
     */
    protected $midTermTrend;

    /**
     * @var string|null
     */
    protected $longTermTrend;

    /**
     * PageViews constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->shortTermTrend = $data['shortTermTrend'] ?? null;

        $this->midTermTrend = $data['midTermTrend'] ?? null;

        $this->longTermTrend = $data['longTermTrend'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function shortTermTrend()
    {
        return $this->shortTermTrend;
    }

    /**
     * @inheritDoc
     */
    public function midTermTrend()
    {
        return $this->midTermTrend;
    }

    /**
     * @inheritDoc
     */
    public function longTermTrend()
    {
        return $this->longTermTrend;
    }
}
