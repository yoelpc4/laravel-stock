<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EsgScores;

interface PeerEnvironmentPerformanceInterface
{
    /**
     * Get peer environment performance's min
     *
     * @return float|null
     */
    public function min();

    /**
     * Get peer environment performance's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get peer environment performance's max
     *
     * @return float|null
     */
    public function max();
}
