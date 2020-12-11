<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\AssetProfile;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\AssetProfile\CompanyOfficerInterface;

class CompanyOfficer implements CompanyOfficerInterface
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var int|null
     */
    protected $age;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var int|null
     */
    protected $yearBorn;

    /**
     * @var int|null
     */
    protected $fiscalYear;

    /**
     * @var float|null
     */
    protected $totalPay;

    /**
     * @var float|null
     */
    protected $exercisedValue;

    /**
     * @var float|null
     */
    protected $unexercisedValue;

    /**
     * CompanyOfficer constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? null;

        $this->age = $data['age'] ?? null;

        $this->title = $data['title'] ?? null;

        $this->yearBorn = $data['yearBorn'] ?? null;

        $this->fiscalYear = $data['fiscalYear'] ?? null;

        $this->totalPay = Arr::get($data, 'totalPay.raw');

        $this->exercisedValue = Arr::get($data, 'exercisedValue.raw');

        $this->unexercisedValue = Arr::get($data, 'unexercisedValue.raw');
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function age()
    {
        return $this->age;
    }

    /**
     * @inheritDoc
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @inheritDoc
     */
    public function yearBorn()
    {
        return $this->yearBorn;
    }

    /**
     * @inheritDoc
     */
    public function fiscalYear()
    {
        return $this->fiscalYear;
    }

    /**
     * @inheritDoc
     */
    public function totalPay()
    {
        return $this->totalPay;
    }

    /**
     * @inheritDoc
     */
    public function exercisedValue()
    {
        return $this->exercisedValue;
    }

    /**
     * @inheritDoc
     */
    public function unexercisedValue()
    {
        return $this->unexercisedValue;
    }
}
