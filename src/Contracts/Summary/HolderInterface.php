<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

interface HolderInterface
{
    /**
     * Get holder's name
     *
     * @return string|null
     */
    public function name();

    /**
     * Get holder's relation
     *
     * @return string|null
     */
    public function relation();

    /**
     * Get holder's url
     *
     * @return string|null
     */
    public function url();

    /**
     * Get holder's transaction description
     *
     * @return string|null
     */
    public function transactionDescription();

    /**
     * Get holder's latest transaction date
     *
     * @return string|null
     */
    public function latestTransactionDate();

    /**
     * Get holder's position direct
     *
     * @return float|null
     */
    public function positionDirect();

    /**
     * Get holder's position direct date
     *
     * @return string|null
     */
    public function positionDirectDate();

    /**
     * Get holder's position indirect
     *
     * @return float|null
     */
    public function positionIndirect();

    /**
     * Get holder's position indirect date
     *
     * @return string|null
     */
    public function positionIndirectDate();
}
