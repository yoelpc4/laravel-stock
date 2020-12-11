<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\InstitutionOwnership;

use Yoelpc4\LaravelStock\Contracts\Summary\InstitutionOwnership\InstitutionOwnershipInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\OwnershipList;

class InstitutionOwnership implements InstitutionOwnershipInterface
{
    /**
     * @var OwnershipList[]
     */
    protected $ownershipLists;

    /**
     * InstitutionOwnership constructor.
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
