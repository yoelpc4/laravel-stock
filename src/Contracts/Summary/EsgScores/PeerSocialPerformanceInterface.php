<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EsgScores;

interface PeerSocialPerformanceInterface
{
    /**
     * Get peer social performance's min
     *
     * @return float|null
     */
    public function min();

    /**
     * Get peer social performance's avg
     *
     * @return float|null
     */
    public function avg();

    /**
     * Get peer social performance's max
     *
     * @return float|null
     */
    public function max();
}
