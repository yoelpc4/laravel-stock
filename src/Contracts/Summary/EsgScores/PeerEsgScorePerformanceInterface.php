<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EsgScores;

interface PeerEsgScorePerformanceInterface
{
    /**
     * Get peer esg score performance's min
     *
     * @return float|null
     */
    public function min();

    /**
     * Get peer esg score performance's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get peer esg score performance's max
     *
     * @return float|null
     */
    public function max();
}
