<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\SummaryProfile;

use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\CompanyOfficerInterface;

interface SummaryProfileInterface
{
    /**
     * Get summary profile's first address
     *
     * @return string|null
     */
    public function firstAddress();

    /**
     * Get summary profile's city
     *
     * @return string|null
     */
    public function city();

    /**
     * Get summary profile's state
     *
     * @return string|null
     */
    public function state();

    /**
     * Get summary profile's zip
     *
     * @return string|null
     */
    public function zip();

    /**
     * Get summary profile's country
     *
     * @return string|null
     */
    public function country();

    /**
     * Get summary profile's phone
     *
     * @return string|null
     */
    public function phone();

    /**
     * Get summary profile's website
     *
     * @return string|null
     */
    public function website();

    /**
     * Get summary profile's industry
     *
     * @return string|null
     */
    public function industry();

    /**
     * Get summary profile's sector
     *
     * @return string|null
     */
    public function sector();

    /**
     * Get summary profile's long business summary
     *
     * @return string|null
     */
    public function longBusinessSummary();

    /**
     * Get summary profile's full time employees
     *
     * @return int|null
     */
    public function fullTimeEmployees();

    /**
     * Get summary profile's company officers
     *
     * @return CompanyOfficerInterface[]
     */
    public function companyOfficers();
}
