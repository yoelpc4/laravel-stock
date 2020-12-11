<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

interface IncomeStatementInterface
{
    /**
     * Get income statement's end date
     *
     * @return string|null
     */
    public function endDate();

    /**
     * Get income statement's total revenue
     *
     * @return float|null
     */
    public function totalRevenue();

    /**
     * Get income statement's cost of revenue
     *
     * @return float|null
     */
    public function costOfRevenue();

    /**
     * Get income statement's gross profit
     *
     * @return float|null
     */
    public function grossProfit();

    /**
     * Get income statement's research development
     *
     * @return float|null
     */
    public function researchDevelopment();

    /**
     * Get income statement's selling general administrative
     *
     * @return float|null
     */
    public function sellingGeneralAdministrative();

    /**
     * Get income statement's non recurring
     *
     * @return float|null
     */
    public function nonRecurring();

    /**
     * Get income statement's other operating expenses
     *
     * @return float|null
     */
    public function otherOperatingExpenses();

    /**
     * Get income statement's total operating expenses
     *
     * @return float|null
     */
    public function totalOperatingExpenses();

    /**
     * Get income statement's operating income
     *
     * @return float|null
     */
    public function operatingIncome();

    /**
     * Get income statement's total other income expenses net
     *
     * @return float|null
     */
    public function totalOtherIncomeExpenseNet();

    /**
     * Get income statement's ebit
     *
     * @return float|null
     */
    public function ebit();

    /**
     * Get income statement's interest expense
     *
     * @return float|null
     */
    public function interestExpense();

    /**
     * Get income statement's income before tax
     *
     * @return float|null
     */
    public function incomeBeforeTax();

    /**
     * Get income statement's income tax expense
     *
     * @return float|null
     */
    public function incomeTaxExpense();

    /**
     * Get income statement's minority interest
     *
     * @return float|null
     */
    public function minorityInterest();

    /**
     * Get income statement's net income from continuing operations
     *
     * @return float|null
     */
    public function netIncomeFromContinuingOperations();

    /**
     * Get income statement's discontinued operations
     *
     * @return float|null
     */
    public function discontinuedOperations();

    /**
     * Get income statement's extraordinary items
     *
     * @return float|null
     */
    public function extraordinaryItems();

    /**
     * Get income statement's effect of accounting charges
     *
     * @return float|null
     */
    public function effectOfAccountingCharges();

    /**
     * Get income statement's other items
     *
     * @return float|null
     */
    public function otherItems();

    /**
     * Get income statement's net income
     *
     * @return float|null
     */
    public function netIncome();

    /**
     * Get income statement's net income applicable to common shares
     *
     * @return float|null
     */
    public function netIncomeApplicableToCommonShares();
}
