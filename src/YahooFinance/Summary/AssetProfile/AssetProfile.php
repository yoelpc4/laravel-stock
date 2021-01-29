<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\AssetProfile;

use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\AssetProfileInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\CompanyOfficerInterface;

class AssetProfile implements AssetProfileInterface
{
    /**
     * @var string|null
     */
    protected $country;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $firstAddress;

    /**
     * @var string|null
     */
    protected $secondAddress;

    /**
     * @var string|null
     */
    protected $zip;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $fax;

    /**
     * @var string|null
     */
    protected $website;

    /**
     * @var string|null
     */
    protected $sector;

    /**
     * @var string|null
     */
    protected $industry;

    /**
     * @var string|null
     */
    protected $longBusinessSummary;

    /**
     * @var string|null
     */
    protected $fullTimeEmployees;

    /**
     * @var CompanyOfficerInterface[]
     */
    protected $companyOfficers;

    /**
     * @var int|null
     */
    protected $auditRisk;

    /**
     * @var int|null
     */
    protected $boardRisk;

    /**
     * @var int|null
     */
    protected $compensationRisk;

    /**
     * @var int|null
     */
    protected $shareHolderRightsRisk;

    /**
     * @var int|null
     */
    protected $overallRisk;

    /**
     * @var int|null
     */
    protected $governanceEpochDate;

    /**
     * @var int|null
     */
    protected $compensationAsOfEpochDate;

    /**
     * AssetProfile constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->country = $data['country'] ?? null;

        $this->city = $data['city'] ?? null;

        $this->firstAddress = $data['firstAddress'] ?? null;

        $this->secondAddress = $data['address2'] ?? null;

        $this->zip = $data['zip'] ?? null;

        $this->phone = $data['phone'] ?? null;

        $this->fax = $data['fax'] ?? null;

        $this->website = $data['website'] ?? null;

        $this->sector = $data['sector'] ?? null;

        $this->industry = $data['industry'] ?? null;

        $this->longBusinessSummary = $data['longBusinessSummary'] ?? null;

        $this->fullTimeEmployees = $data['fullTimeEmployees'] ?? null;

        $this->companyOfficers = array_map(function (array $data) {
            return new CompanyOfficer($data);
        }, $data['companyOfficers'] ?? []);

        $this->auditRisk = $data['auditRisk'] ?? null;

        $this->boardRisk = $data['boardRisk'] ?? null;

        $this->compensationRisk = $data['compensationRisk'] ?? null;

        $this->shareHolderRightsRisk = $data['shareHolderRightsRisk'] ?? null;

        $this->overallRisk = $data['overallRisk'] ?? null;

        $this->governanceEpochDate = $data['governanceEpochDate'] ?? null;

        $this->compensationAsOfEpochDate = $data['compensationAsOfEpochDate'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function country()
    {
        return $this->country;
    }

    /**
     * @inheritDoc
     */
    public function city()
    {
        return $this->city;
    }

    /**
     * @inheritDoc
     */
    public function firstAddress()
    {
        return $this->firstAddress;
    }

    /**
     * @inheritDoc
     */
    public function secondAddress()
    {
        return $this->secondAddress;
    }

    /**
     * @inheritDoc
     */
    public function zip()
    {
        return $this->zip;
    }

    /**
     * @inheritDoc
     */
    public function phone()
    {
        return $this->phone;
    }

    /**
     * @inheritDoc
     */
    public function fax()
    {
        return $this->fax;
    }

    /**
     * @inheritDoc
     */
    public function website()
    {
        return $this->website;
    }

    /**
     * @inheritDoc
     */
    public function sector()
    {
        return $this->sector;
    }

    /**
     * @inheritDoc
     */
    public function industry()
    {
        return $this->industry;
    }

    /**
     * @inheritDoc
     */
    public function longBusinessSummary()
    {
        return $this->longBusinessSummary;
    }

    /**
     * @inheritDoc
     */
    public function fullTimeEmployees()
    {
        return $this->fullTimeEmployees;
    }

    /**
     * @inheritDoc
     */
    public function companyOfficers()
    {
        return $this->companyOfficers;
    }

    /**
     * @inheritDoc
     */
    public function auditRisk()
    {
        return $this->auditRisk;
    }

    /**
     * @inheritDoc
     */
    public function boardRisk()
    {
        return $this->boardRisk;
    }

    /**
     * @inheritDoc
     */
    public function compensationRisk()
    {
        return $this->compensationRisk;
    }

    /**
     * @inheritDoc
     */
    public function shareHolderRightsRisk()
    {
        return $this->shareHolderRightsRisk;
    }

    /**
     * @inheritDoc
     */
    public function overallRisk()
    {
        return $this->overallRisk;
    }

    /**
     * @inheritDoc
     */
    public function governanceEpochDate()
    {
        return $this->governanceEpochDate;
    }

    /**
     * @inheritDoc
     */
    public function compensationAsOfEpochDate()
    {
        return $this->compensationAsOfEpochDate;
    }
}
