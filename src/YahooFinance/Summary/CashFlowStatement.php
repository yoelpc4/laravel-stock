<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\CashFlowStatementInterface;

class CashFlowStatement implements CashFlowStatementInterface
{
    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var float|null
     */
    protected $netIncome;

    /**
     * @var float|null
     */
    protected $changeToNetIncome;

    /**
     * @var float|null
     */
    protected $depreciation;

    /**
     * @var float|null
     */
    protected $changeToAccountReceivables;

    /**
     * @var float|null
     */
    protected $changeToLiabilities;

    /**
     * @var float|null
     */
    protected $changeToInventory;

    /**
     * @var float|null
     */
    protected $changeToOperatingActivities;

    /**
     * @var float|null
     */
    protected $totalCashFlowsFromOperatingActivities;

    /**
     * @var float|null
     */
    protected $capitalExpenditures;

    /**
     * @var float|null
     */
    protected $investments;

    /**
     * @var float|null
     */
    protected $otherCashFlowsFromInvestingActivities;

    /**
     * @var float|null
     */
    protected $totalCashFlowsFromInvestingActivities;

    /**
     * @var float|null
     */
    protected $dividendsPaid;

    /**
     * @var float|null
     */
    protected $netBorrowings;

    /**
     * @var float|null
     */
    protected $otherCashFlowsFromFinancingActivities;

    /**
     * @var float|null
     */
    protected $totalCashFlowsFromFinancingActivities;

    /**
     * @var float|null
     */
    protected $effectOfExchangeRate;

    /**
     * @var float|null
     */
    protected $changeInCash;

    /**
     * @var float|null
     */
    protected $repurchaseOfStock;

    /**
     * @var float|null
     */
    protected $issuanceOfStock;

    /**
     * CashFlowStatement constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->endDate = Arr::get($data, 'endDate.fmt');

        $this->netIncome = Arr::get($data, 'netIncome.raw');

        $this->changeToNetIncome = Arr::get($data, 'changeToNetincome.raw');

        $this->depreciation = Arr::get($data, 'depreciation.raw');

        $this->changeToAccountReceivables = Arr::get($data, 'changeToAccountReceivables.raw');

        $this->changeToLiabilities = Arr::get($data, 'changeToLiabilities.raw');

        $this->changeToInventory = Arr::get($data, 'changeToInventory.raw');

        $this->changeToOperatingActivities = Arr::get($data, 'changeToOperatingActivities.raw');

        $this->totalCashFlowsFromOperatingActivities = Arr::get($data, 'totalCashFromOperatingActivities.raw');

        $this->capitalExpenditures = Arr::get($data, 'capitalExpenditures.raw');

        $this->investments = Arr::get($data, 'investments.raw');

        $this->otherCashFlowsFromInvestingActivities = Arr::get($data, 'otherCashflowsFromInvestingActivities.raw');

        $this->totalCashFlowsFromInvestingActivities = Arr::get($data, 'totalCashflowsFromInvestingActivities.raw');

        $this->dividendsPaid = Arr::get($data, 'dividendsPaid.raw');

        $this->netBorrowings = Arr::get($data, 'netBorrowings.raw');

        $this->otherCashFlowsFromFinancingActivities = Arr::get($data, 'otherCashflowsFromFinancingActivities.raw');

        $this->totalCashFlowsFromFinancingActivities = Arr::get($data, 'totalCashFromFinancingActivities.raw');

        $this->effectOfExchangeRate = Arr::get($data, 'effectOfExchangeRate.raw');

        $this->changeInCash = Arr::get($data, 'changeInCash.raw');

        $this->repurchaseOfStock = Arr::get($data, 'repurchaseOfStock.raw');

        $this->issuanceOfStock = Arr::get($data, 'issuanceOfStock.raw');
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
    public function netIncome()
    {
        return $this->netIncome;
    }

    /**
     * @inheritDoc
     */
    public function changeToNetIncome()
    {
        return $this->changeToNetIncome;
    }

    /**
     * @inheritDoc
     */
    public function depreciation()
    {
        return $this->depreciation;
    }

    /**
     * @inheritDoc
     */
    public function changeToAccountReceivables()
    {
        return $this->changeToAccountReceivables;
    }

    /**
     * @inheritDoc
     */
    public function changeToLiabilities()
    {
        return $this->changeToLiabilities;
    }

    /**
     * @inheritDoc
     */
    public function changeToInventory()
    {
        return $this->changeToInventory;
    }

    /**
     * @inheritDoc
     */
    public function changeToOperatingActivities()
    {
        return $this->changeToOperatingActivities;
    }

    /**
     * @inheritDoc
     */
    public function totalCashFlowsFromOperatingActivities()
    {
        return $this->totalCashFlowsFromOperatingActivities;
    }

    /**
     * @inheritDoc
     */
    public function capitalExpenditures()
    {
        return $this->capitalExpenditures;
    }

    /**
     * @inheritDoc
     */
    public function investments()
    {
        return $this->investments;
    }

    /**
     * @inheritDoc
     */
    public function otherCashFlowsFromInvestingActivities()
    {
        return $this->otherCashFlowsFromInvestingActivities;
    }

    /**
     * @inheritDoc
     */
    public function totalCashFlowsFromInvestingActivities()
    {
        return $this->totalCashFlowsFromInvestingActivities;
    }

    /**
     * @inheritDoc
     */
    public function dividendsPaid()
    {
        return $this->dividendsPaid;
    }

    /**
     * @inheritDoc
     */
    public function netBorrowings()
    {
        return $this->netBorrowings;
    }

    /**
     * @inheritDoc
     */
    public function otherCashFlowsFromFinancingActivities()
    {
        return $this->otherCashFlowsFromFinancingActivities;
    }

    /**
     * @inheritDoc
     */
    public function totalCashFlowsFromFinancingActivities()
    {
        return $this->totalCashFlowsFromFinancingActivities;
    }

    /**
     * @inheritDoc
     */
    public function effectOfExchangeRate()
    {
        return $this->effectOfExchangeRate;
    }

    /**
     * @inheritDoc
     */
    public function changeInCash()
    {
        return $this->changeInCash;
    }

    /**
     * @inheritDoc
     */
    public function repurchaseOfStock()
    {
        return $this->repurchaseOfStock;
    }

    /**
     * @inheritDoc
     */
    public function issuanceOfStock()
    {
        return $this->issuanceOfStock;
    }
}
