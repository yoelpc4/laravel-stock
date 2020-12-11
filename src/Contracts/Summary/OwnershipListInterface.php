<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

interface OwnershipListInterface
{
    /**
     * Get ownership list's report date
     *
     * @return string|null
     */
    public function reportDate();

    /**
     * Get ownership list's organization
     *
     * @return string|null
     */
    public function organization();

    /**
     * Get ownership list's percent held (%)
     *
     * @return float|null
     */
    public function percentHeld();

    /**
     * Get ownership list's position
     *
     * @return float|null
     */
    public function position();

    /**
     * Get ownership list's value
     *
     * @return float|null
     */
    public function value();
}
