<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\SummaryProfile;

use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\CompanyOfficerInterface;
use Yoelpc4\LaravelStock\Contracts\Summary\SummaryProfile\SummaryProfileInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\AssetProfile\CompanyOfficer;

class SummaryProfile implements SummaryProfileInterface
{
    /**
     * @var string|null
     */
    protected $firstAddress;

    /**
     * @var string|null
     */
    protected $city;

    /**
     * @var string|null
     */
    protected $state;

    /**
     * @var string|null
     */
    protected $zip;

    /**
     * @var string|null
     */
    protected $country;

    /**
     * @var string|null
     */
    protected $phone;

    /**
     * @var string|null
     */
    protected $website;

    /**
     * @var string|null
     */
    protected $industry;

    /**
     * @var string|null
     */
    protected $sector;

    /**
     * @var string|null
     */
    protected $longBusinessSummary;

    /**
     * @var int|null
     */
    protected $fullTimeEmployees;

    /**
     * @var CompanyOfficerInterface[]
     */
    protected $companyOfficers;

    /**
     * SummaryProfile constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->firstAddress = $data['address1'] ?? null;

        $this->city = $data['city'] ?? null;

        $this->state = $data['state'] ?? null;

        $this->zip = $data['zip'] ?? null;

        $this->country = $data['country'] ?? null;

        $this->phone = $data['phone'] ?? null;

        $this->website = $data['website'] ?? null;

        $this->industry = $data['industry'] ?? null;

        $this->sector = $data['sector'] ?? null;

        $this->longBusinessSummary = $data['longBusinessSummary'] ?? null;

        $this->fullTimeEmployees = $data['fullTimeEmployees'] ?? null;

        $this->companyOfficers = array_map(function (array $data) {
            return new CompanyOfficer($data);
        }, $data['companyOfficers'] ?? []);
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
    public function city()
    {
        return $this->city;
    }

    /**
     * @inheritDoc
     */
    public function state()
    {
        return $this->state;
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
    public function country()
    {
        return $this->country;
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
    public function website()
    {
        return $this->website;
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
    public function sector()
    {
        return $this->sector;
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
}
