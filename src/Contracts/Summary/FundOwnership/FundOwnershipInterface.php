<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\FundOwnership;

use Yoelpc4\LaravelStock\Contracts\Summary\OwnershipListInterface;

interface FundOwnershipInterface
{
    /**
     * Get fund ownership's ownership lists
     *
     * @return OwnershipListInterface[]
     */
    public function ownershipLists();
}
