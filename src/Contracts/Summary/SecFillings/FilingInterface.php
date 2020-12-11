<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\SecFillings;

interface FilingInterface
{
    /**
     * Get filing's date
     *
     * @return string|null
     */
    public function date();

    /**
     * Get filing's epoch date
     *
     * @return int|null
     */
    public function epochDate();

    /**
     * Get filing's type
     *
     * @return string|null
     */
    public function type();

    /**
     * Get filing's title
     *
     * @return string|null
     */
    public function title();

    /**
     * Get filing's edgar url
     *
     * @return string|null
     */
    public function edgarUrl();
}
