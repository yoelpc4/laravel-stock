<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\UpgradeDowngradeHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory\UpgradeDowngradeHistoryInterface;

class UpgradeDowngradeHistory implements UpgradeDowngradeHistoryInterface
{
    /**
     * @var History[]
     */
    protected $histories;

    /**
     * UpgradeDowngradeHistory constructor.
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
