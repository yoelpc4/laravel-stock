<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\FundOwnership;

use Yoelpc4\LaravelStock\Contracts\Summary\FundOwnership\FundOwnershipInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\OwnershipListInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\OwnershipList;

class FundOwnership implements FundOwnershipInterface
{
    /**
     * @var OwnershipListInterface[]
     */
    protected $ownershipLists;

    /**
     * FundOwnership constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->ownershipLists = array_map(function (array $data) {
            return new OwnershipList($data);
        }, $data['ownershipList'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function ownershipLists()
    {
        return $this->ownershipLists;
    }
}
