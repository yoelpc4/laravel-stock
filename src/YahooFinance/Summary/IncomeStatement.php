<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\IncomeStatementInterface;

class IncomeStatement implements IncomeStatementInterface
{
    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var float|null
     */
    protected $totalRevenue;

    /**
     * @var float|null
     */
    protected $costOfRevenue;

    /**
     * @var float|null
     */
    protected $grossProfit;

    /**
     * @var float|null
     */
    protected $researchDevelopment;

    /**
     * @var float|null
     */
    protected $sellingGeneralAdministrative;

    /**
     * @var float|null
     */
    protected $nonRecurring;

    /**
     * @var float|null
     */
    protected $otherOperatingExpenses;

    /**
     * @var float|null
     */
    protected $totalOperatingExpenses;

    /**
     * @var float|null
     */
    protected $operatingIncome;

    /**
     * @var float|null
     */
    protected $totalOtherIncomeExpenseNet;

    /**
     * @var float|null
     */
    protected $ebit;

    /**
     * @var float|null
     */
    protected $interestExpense;

    /**
     * @var float|null
     */
    protected $incomeBeforeTax;

    /**
     * @var float|null
     */
    protected $incomeTaxExpense;

    /**
     * @var float|null
     */
    protected $minorityInterest;

    /**
     * @var float|null
     */
    protected $netIncomeFromContinuingOperations;

    /**
     * @var float|null
     */
    protected $discontinuedOperations;

    /**
     * @var float|null
     */
    protected $extraordinaryItems;

    /**
     * @var float|null
     */
    protected $effectOfAccountingCharges;

    /**
     * @var float|null
     */
    protected $otherItems;

    /**
     * @var float|null
     */
    protected $netIncome;

    /**
     * @var float|null
     */
    protected $netIncomeApplicableToCommonShares;

    /**
     * IncomeStatement constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->endDate = Arr::get($data, 'endDate.fmt');

        $this->totalRevenue = Arr::get($data, 'totalRevenue.raw');

        $this->costOfRevenue = Arr::get($data, 'costOfRevenue.raw');

        $this->grossProfit = Arr::get($data, 'grossProfit.raw');

        $this->researchDevelopment = Arr::get($data, 'researchDevelopment.raw');

        $this->sellingGeneralAdministrative = Arr::get($data, 'sellingGeneralAdministrative.raw');

        $this->nonRecurring = Arr::get($data, 'nonRecurring.raw');

        $this->otherOperatingExpenses = Arr::get($data, 'otherOperatingExpenses.raw');

        $this->totalOperatingExpenses = Arr::get($data, 'totalOperatingExpenses.raw');

        $this->operatingIncome = Arr::get($data, 'operatingIncome.raw');

        $this->totalOtherIncomeExpenseNet = Arr::get($data, 'totalOtherIncomeExpenseNet.raw');

        $this->ebit = Arr::get($data, 'ebit.raw');

        $this->interestExpense = Arr::get($data, 'interestExpense.raw');

        $this->incomeBeforeTax = Arr::get($data, 'incomeBeforeTax.raw');

        $this->incomeTaxExpense = Arr::get($data, 'incomeTaxExpense.raw');

        $this->minorityInterest = Arr::get($data, 'minorityInterest.raw');

        $this->netIncomeFromContinuingOperations = Arr::get($data, 'netIncomeFromContinuingOps.raw');

        $this->discontinuedOperations = Arr::get($data, 'discontinuedOperations.raw');

        $this->extraordinaryItems = Arr::get($data, 'extraordinaryItems.raw');

        $this->effectOfAccountingCharges = Arr::get($data, 'effectOfAccountingCharges.raw');

        $this->otherItems = Arr::get($data, 'otherItems.raw');

        $this->netIncome = Arr::get($data, 'netIncome.raw');

        $this->netIncomeApplicableToCommonShares = Arr::get($data, 'netIncomeApplicableToCommonShares.raw');
    }

    /**
     * @inheritDoc
     */
    public function endDate()
    {
        return $this->endDate;
    }

    /**
     * @inheritDoc
     */
    public function totalRevenue()
    {
        return $this->totalRevenue;
    }

    /**
     * @inheritDoc
     */
    public function costOfRevenue()
    {
        return $this->costOfRevenue;
    }

    /**
     * @inheritDoc
     */
    public function grossProfit()
    {
        return $this->grossProfit;
    }

    /**
     * @inheritDoc
     */
    public function researchDevelopment()
    {
        return $this->researchDevelopment;
    }

    /**
     * @inheritDoc
     */
    public function sellingGeneralAdministrative()
    {
        return $this->sellingGeneralAdministrative;
    }

    /**
     * @inheritDoc
     */
    public function nonRecurring()
    {
        return $this->nonRecurring;
    }

    /**
     * @inheritDoc
     */
    public function otherOperatingExpenses()
    {
        return $this->otherOperatingExpenses;
    }

    /**
     * @inheritDoc
     */
    public function totalOperatingExpenses()
    {
        return $this->totalOperatingExpenses;
    }

    /**
     * @inheritDoc
     */
    public function operatingIncome()
    {
        return $this->operatingIncome;
    }

    /**
     * @inheritDoc
     */
    public function totalOtherIncomeExpenseNet()
    {
        return $this->totalOtherIncomeExpenseNet;
    }

    /**
     * @inheritDoc
     */
    public function ebit()
    {
        return $this->ebit;
    }

    /**
     * @inheritDoc
     */
    public function interestExpense()
    {
        return $this->interestExpense;
    }

    /**
     * @inheritDoc
     */
    public function incomeBeforeTax()
    {
        return $this->incomeBeforeTax;
    }

    /**
     * @inheritDoc
     */
    public function incomeTaxExpense()
    {
        return $this->incomeTaxExpense;
    }

    /**
     * @inheritDoc
     */
    public function minorityInterest()
    {
        return $this->minorityInterest;
    }

    /**
     * @inheritDoc
     */
    public function netIncomeFromContinuingOperations()
    {
        return $this->netIncomeFromContinuingOperations;
    }

    /**
     * @inheritDoc
     */
    public function discontinuedOperations()
    {
        return $this->discontinuedOperations;
    }

    /**
     * @inheritDoc
     */
    public function extraordinaryItems()
    {
        return $this->extraordinaryItems;
    }

    /**
     * @inheritDoc
     */
    public function effectOfAccountingCharges()
    {
        return $this->effectOfAccountingCharges;
    }

    /**
     * @inheritDoc
     */
    public function otherItems()
    {
        return $this->otherItems;
    }

    /**
     * @inheritDoc
     */
    public function netIncome()
    {
        return $this->netIncome;
    }

    /**
     * @inheritDoc
     */
    public function netIncomeApplicableToCommonShares()
    {
        return $this->netIncomeApplicableToCommonShares;
    }
}
