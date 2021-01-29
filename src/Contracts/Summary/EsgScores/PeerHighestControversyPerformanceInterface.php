<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EsgScores;

interface PeerHighestControversyPerformanceInterface
{
    /**
     * Get peer highest controversy performance's min
     *
     * @return float|null
     */
    public function min();

    /**
     * Get peer highest controversy performance's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get peer highest controversy performance's max
     *
     * @return float|null
     */
    public function max();
}
