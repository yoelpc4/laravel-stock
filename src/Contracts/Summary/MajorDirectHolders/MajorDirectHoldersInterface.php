<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\MajorDirectHolders;

use Yoelpc4\LaravelStock\Contracts\Summary\HolderInterface;

interface MajorDirectHoldersInterface
{
    /**
     * Get major direct holders' holders
     *
     * @return HolderInterface[]
     */
    public function holders();
}
