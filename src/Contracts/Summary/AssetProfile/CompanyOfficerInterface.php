<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile;

interface CompanyOfficerInterface
{
    /**
     * Get company officer's name
     *
     * @return string|null
     */
    public function name();

    /**
     * Get company officer's age
     *
     * @return int|null
     */
    public function age();

    /**
     * Get company officer's title
     *
     * @return string|null
     */
    public function title();

    /**
     * Get company officer's year born
     *
     * @return int|null
     */
    public function yearBorn();

    /**
     * Get company officer's fiscal year
     *
     * @return int|null
     */
    public function fiscalYear();

    /**
     * Get company officer's total pay
     *
     * @return float|null
     */
    public function totalPay();

    /**
     * Get company officer's exercised value
     *
     * @return float|null
     */
    public function exercisedValue();

    /**
     * Get company officer's unexercised value
     *
     * @return float|null
     */
    public function unexercisedValue();
}
