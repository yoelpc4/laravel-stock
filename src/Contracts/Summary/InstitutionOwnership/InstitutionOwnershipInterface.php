<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\InstitutionOwnership;

use Yoelpc4\LaravelStock\Contracts\Summary\OwnershipListInterface;

interface InstitutionOwnershipInterface
{
    /**
     * Get institution ownership's ownership lists
     *
     * @return OwnershipListInterface[]
     */
    public function ownershipLists();
}
