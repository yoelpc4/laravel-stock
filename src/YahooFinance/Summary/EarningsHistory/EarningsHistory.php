<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EarningsHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\EarningsHistory\EarningsHistoryInterface;

class EarningsHistory implements EarningsHistoryInterface
{
    /**
     * @var History[]
     */
    protected $histories;

    /**
     * EarningsHistory constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->histories = array_map(function (array $data) {
            return new History($data);
        }, $data['history'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function histories()
    {
        return $this->histories;
    }
}
