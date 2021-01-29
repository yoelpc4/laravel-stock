<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EsgScores;

interface PeerGovernancePerformanceInterface
{
    /**
     * Get peer governance performance's min
     *
     * @return float|null
     */
    public function min();

    /**
     * Get peer governance performance's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get peer governance performance's max
     *
     * @return float|null
     */
    public function max();
}
