<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\InsiderHolders;

use Yoelpc4\LaravelStock\Contracts\Summary\HolderInterface;

interface InsiderHoldersInterface
{
    /**
     * Get insider holders' holders
     *
     * @return HolderInterface[]
     */
    public function holders();
}
