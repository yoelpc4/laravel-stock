<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\SecFillings;

interface SecFilingsInterface
{
    /**
     * Get sec filings' filings
     *
     * @return FilingInterface[]
     */
    public function filings();
}
