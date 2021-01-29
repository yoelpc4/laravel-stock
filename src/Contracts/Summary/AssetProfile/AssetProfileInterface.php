<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile;

interface AssetProfileInterface
{
    /**
     * Get asset profile's country
     *
     * @return string|null
     */
    public function country();

    /**
     * Get asset profile's city
     *
     * @return string|null
     */
    public function city();

    /**
     * Get asset profile's first address
     *
     * @return string|null
     */
    public function firstAddress();

    /**
     * Get asset profile's second address
     *
     * @return string|null
     */
    public function secondAddress();

    /**
     * Get asset profile's zip
     *
     * @return string|null
     */
    public function zip();

    /**
     * Get asset profile's phone
     *
     * @return string|null
     */
    public function phone();

    /**
     * Get asset profile's fax
     *
     * @return string|null
     */
    public function fax();

    /**
     * Get asset profile's website
     *
     * @return string|null
     */
    public function website();

    /**
     * Get asset profile's sector
     *
     * @return string|null
     */
    public function sector();

    /**
     * Get asset profile's industry
     *
     * @return string|null
     */
    public function industry();

    /**
     * Get asset profile's long business summary
     *
     * @return string|null
     */
    public function longBusinessSummary();

    /**
     * Get asset profile's full time employees
     *
     * @return int|null
     */
    public function fullTimeEmployees();

    /**
     * Get asset profile's company officers
     *
     * @return CompanyOfficerInterface[]
     */
    public function companyOfficers();

    /**
     * Get asset profile's audit risk
     *
     * @return int|null
     */
    public function auditRisk();

    /**
     * Get asset profile's board risk
     *
     * @return int|null
     */
    public function boardRisk();

    /**
     * Get asset profile's compensation risk
     *
     * @return int|null
     */
    public function compensationRisk();

    /**
     * Get asset profile's share holder rights risk
     *
     * @return int|null
     */
    public function shareHolderRightsRisk();

    /**
     * Get asset profile's overall risk
     *
     * @return int|null
     */
    public function overallRisk();

    /**
     * Get asset profile's governance epoch date
     *
     * @return int|null
     */
    public function governanceEpochDate();

    /**
     * Get asset profile's compensation as of epoch date
     *
     * @return int|null
     */
    public function compensationAsOfEpochDate();
}
