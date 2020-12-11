<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\BalanceSheetStatementInterface;

class BalanceSheetStatement implements BalanceSheetStatementInterface
{
    /**
     * @var string|null
     */
    protected $endDate;

    /**
     * @var float|null
     */
    protected $cash;

    /**
     * @var float|null
     */
    protected $shortTermInvestments;

    /**
     * @var float|null
     */
    protected $netReceivables;

    /**
     * @var float|null
     */
    protected $inventory;

    /**
     * @var float|null
     */
    protected $otherCurrentAssets;

    /**
     * @var float|null
     */
    protected $totalCurrentAssets;

    /**
     * @var float|null
     */
    protected $longTermInvestments;

    /**
     * @var float|null
     */
    protected $propertyPlantEquipment;

    /**
     * @var float|null
     */
    protected $goodWill;

    /**
     * @var float|null
     */
    protected $intangibleAssets;

    /**
     * @var float|null
     */
    protected $otherAssets;

    /**
     * @var float|null
     */
    protected $deferredLongTermAssetCharges;

    /**
     * @var float|null
     */
    protected $totalAssets;

    /**
     * @var float|null
     */
    protected $accountsPayable;

    /**
     * @var float|null
     */
    protected $shortTermDebt;

    /**
     * @var float|null
     */
    protected $otherCurrentLiabilities;

    /**
     * @var float|null
     */
    protected $longTermDebt;

    /**
     * @var float|null
     */
    protected $otherLiabilities;

    /**
     * @var float|null
     */
    protected $totalCurrentLiabilities;

    /**
     * @var float|null
     */
    protected $totalLiabilities;

    /**
     * @var float|null
     */
    protected $commonStock;

    /**
     * @var float|null
     */
    protected $retainedEarnings;

    /**
     * @var float|null
     */
    protected $treasuryStock;

    /**
     * @var float|null
     */
    protected $otherStockholderEquity;

    /**
     * @var float|null
     */
    protected $totalStockholderEquity;

    /**
     * @var float|null
     */
    protected $netTangibleAssets;

    /**
     * BalanceSheetStatement constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->endDate = Arr::get($data, 'endDate.fmt');

        $this->cash = Arr::get($data, 'cash.raw');

        $this->shortTermInvestments = Arr::get($data, 'shortTermInvestments.raw');

        $this->netReceivables = Arr::get($data, 'netReceivables.raw');

        $this->inventory = Arr::get($data, 'inventory.raw');

        $this->otherCurrentAssets = Arr::get($data, 'otherCurrentAssets.raw');

        $this->totalCurrentAssets = Arr::get($data, 'totalCurrentAssets.raw');

        $this->longTermInvestments = Arr::get($data, 'longTermInvestments.raw');

        $this->propertyPlantEquipment = Arr::get($data, 'propertyPlantEquipment.raw');

        $this->goodWill = Arr::get($data, 'goodWill.raw');

        $this->intangibleAssets = Arr::get($data, 'intangibleAssets.raw');

        $this->otherAssets = Arr::get($data, 'otherAssets.raw');

        $this->deferredLongTermAssetCharges = Arr::get($data, 'deferredLongTermAssetCharges.raw');

        $this->totalAssets = Arr::get($data, 'totalAssets.raw');

        $this->accountsPayable = Arr::get($data, 'accountsPayable.raw');

        $this->shortTermDebt = Arr::get($data, 'shortLongTermDebt.raw');

        $this->otherCurrentLiabilities = Arr::get($data, 'otherCurrentLiab.raw');

        $this->longTermDebt = Arr::get($data, 'longTermDebt.raw');

        $this->otherLiabilities = Arr::get($data, 'otherLiab.raw');

        $this->totalCurrentLiabilities = Arr::get($data, 'totalCurrentLiabilities.raw');

        $this->totalLiabilities = Arr::get($data, 'totalLiab.raw');

        $this->commonStock = Arr::get($data, 'commonStock.raw');

        $this->retainedEarnings = Arr::get($data, 'retainedEarnings.raw');

        $this->treasuryStock = Arr::get($data, 'treasuryStock.raw');

        $this->otherStockholderEquity = Arr::get($data, 'otherStockholderEquity.raw');

        $this->totalStockholderEquity = Arr::get($data, 'totalStockholderEquity.raw');

        $this->netTangibleAssets = Arr::get($data, 'netTangibleAssets.raw');
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
    public function cash()
    {
        return $this->cash;
    }

    /**
     * @inheritDoc
     */
    public function shortTermInvestments()
    {
        return $this->shortTermInvestments;
    }

    /**
     * @inheritDoc
     */
    public function netReceivables()
    {
        return $this->netReceivables;
    }

    /**
     * @inheritDoc
     */
    public function inventory()
    {
        return $this->inventory;
    }

    /**
     * @inheritDoc
     */
    public function otherCurrentAssets()
    {
        return $this->otherCurrentAssets;
    }

    /**
     * @inheritDoc
     */
    public function totalCurrentAssets()
    {
        return $this->totalCurrentAssets;
    }

    /**
     * @inheritDoc
     */
    public function longTermInvestments()
    {
        return $this->longTermInvestments;
    }

    /**
     * @inheritDoc
     */
    public function propertyPlantEquipment()
    {
        return $this->propertyPlantEquipment;
    }

    /**
     * @inheritDoc
     */
    public function goodWill()
    {
        return $this->goodWill;
    }

    /**
     * @inheritDoc
     */
    public function intangibleAssets()
    {
        return $this->intangibleAssets;
    }

    /**
     * @inheritDoc
     */
    public function otherAssets()
    {
        return $this->otherAssets;
    }

    /**
     * @inheritDoc
     */
    public function deferredLongTermAssetCharges()
    {
        return $this->deferredLongTermAssetCharges;
    }

    /**
     * @inheritDoc
     */
    public function totalAssets()
    {
        return $this->totalAssets;
    }

    /**
     * @inheritDoc
     */
    public function accountsPayable()
    {
        return $this->accountsPayable;
    }

    /**
     * @inheritDoc
     */
    public function shortTermDebt()
    {
        return $this->shortTermDebt;
    }

    /**
     * @inheritDoc
     */
    public function otherCurrentLiabilities()
    {
        return $this->otherCurrentLiabilities;
    }

    /**
     * @inheritDoc
     */
    public function longTermDebt()
    {
        return $this->longTermDebt;
    }

    /**
     * @inheritDoc
     */
    public function otherLiabilities()
    {
        return $this->otherLiabilities;
    }

    /**
     * @inheritDoc
     */
    public function totalCurrentLiabilities()
    {
        return $this->totalCurrentLiabilities;
    }

    /**
     * @inheritDoc
     */
    public function totalLiabilities()
    {
        return $this->totalLiabilities;
    }

    /**
     * @inheritDoc
     */
    public function commonStock()
    {
        return $this->commonStock;
    }

    /**
     * @inheritDoc
     */
    public function retainedEarnings()
    {
        return $this->retainedEarnings;
    }

    /**
     * @inheritDoc
     */
    public function treasuryStock()
    {
        return $this->treasuryStock;
    }

    /**
     * @inheritDoc
     */
    public function otherStockholderEquity()
    {
        return $this->otherStockholderEquity;
    }

    /**
     * @inheritDoc
     */
    public function totalStockholderEquity()
    {
        return $this->totalStockholderEquity;
    }

    /**
     * @inheritDoc
     */
    public function netTangibleAssets()
    {
        return $this->netTangibleAssets;
    }
}
