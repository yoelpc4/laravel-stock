<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EarningsTrend;

interface EpsRevisionsInterface
{
    /**
     * Get eps revisions' up last seven days
     *
     * @return float|null
     */
    public function upLastSevenDays();

    /**
     * Get eps revisions' up last thirty days
     *
     * @return float|null
     */
    public function upLastThirtyDays();

    /**
     * Get eps revisions' down last thirty days
     *
     * @return float|null
     */
    public function downLastThirtyDays();

    /**
     * Get eps revisions' down last ninety days
     *
     * @return float|null
     */
    public function downLastNinetyDays();
}
