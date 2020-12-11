<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

interface BalanceSheetStatementInterface
{
    /**
     * Get balance sheet statement's end date
     *
     * @return string|null
     */
    public function endDate();

    /**
     * Get balance sheet statement's cash
     *
     * @return float|null
     */
    public function cash();

    /**
     * Get balance sheet statement's short term investments
     *
     * @return float|null
     */
    public function shortTermInvestments();

    /**
     * Get balance sheet statement's net receivables
     *
     * @return float|null
     */
    public function netReceivables();

    /**
     * Get balance sheet statement's inventory
     *
     * @return float|null
     */
    public function inventory();

    /**
     * Get balance sheet statement's other current assets
     *
     * @return float|null
     */
    public function otherCurrentAssets();

    /**
     * Get balance sheet statement's total current assets
     *
     * @return float|null
     */
    public function totalCurrentAssets();

    /**
     * Get balance sheet statement's long term investments
     *
     * @return float|null
     */
    public function longTermInvestments();

    /**
     * Get balance sheet statement's property plant equipment
     *
     * @return float|null
     */
    public function propertyPlantEquipment();

    /**
     * Get balance sheet statement's good will
     *
     * @return float|null
     */
    public function goodWill();

    /**
     * Get balance sheet statement's intangible assets
     *
     * @return float|null
     */
    public function intangibleAssets();

    /**
     * Get balance sheet statement's other assets
     *
     * @return float|null
     */
    public function otherAssets();

    /**
     * Get balance sheet statement's deferred long term asset charges
     *
     * @return float|null
     */
    public function deferredLongTermAssetCharges();

    /**
     * Get balance sheet statement's total assets
     *
     * @return float|null
     */
    public function totalAssets();

    /**
     * Get balance sheet statement's account payable
     *
     * @return float|null
     */
    public function accountsPayable();

    /**
     * Get balance sheet statement's short term debt
     *
     * @return float|null
     */
    public function shortTermDebt();

    /**
     * Get balance sheet statement's other current liabilities
     *
     * @return float|null
     */
    public function otherCurrentLiabilities();

    /**
     * Get balance sheet statement's long term debt
     *
     * @return float|null
     */
    public function longTermDebt();

    /**
     * Get balance sheet statement's other liabilities
     *
     * @return float|null
     */
    public function otherLiabilities();

    /**
     * Get balance sheet statement's total current liabilities
     *
     * @return float|null
     */
    public function totalCurrentLiabilities();

    /**
     * Get balance sheet statement's total liabilities
     *
     * @return float|null
     */
    public function totalLiabilities();

    /**
     * Get balance sheet statement's common stock
     *
     * @return float|null
     */
    public function commonStock();

    /**
     * Get balance sheet statement's retained earnings
     *
     * @return float|null
     */
    public function retainedEarnings();

    /**
     * Get balance sheet statement's treasury stock
     *
     * @return float|null
     */
    public function treasuryStock();

    /**
     * Get balance sheet statement's other stockholder equity
     *
     * @return float|null
     */
    public function otherStockholderEquity();

    /**
     * Get balance sheet statement's total stockholder equity
     *
     * @return float|null
     */
    public function totalStockholderEquity();

    /**
     * Get balance sheet statement's net tangible assets
     *
     * @return float|null
     */
    public function netTangibleAssets();
}
