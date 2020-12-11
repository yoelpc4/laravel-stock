<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary;

interface CashFlowStatementInterface
{
    /**
     * Get cash flow statement's end date
     *
     * @return string|null
     */
    public function endDate();

    /**
     * Get cash flow statement's net income
     *
     * @return float|null
     */
    public function netIncome();

    /**
     * Get cash flow statement's change to net income
     *
     * @return float|null
     */
    public function changeToNetIncome();

    /**
     * Get cash flow statement's depreciation
     *
     * @return float|null
     */
    public function depreciation();

    /**
     * Get cash flow statement's change to account receivables
     *
     * @return float|null
     */
    public function changeToAccountReceivables();

    /**
     * Get cash flow statement's change to liabilities
     *
     * @return float|null
     */
    public function changeToLiabilities();

    /**
     * Get cash flow statement's change to inventory
     *
     * @return float|null
     */
    public function changeToInventory();

    /**
     * Get cash flow statement's change to operating activities
     *
     * @return float|null
     */
    public function changeToOperatingActivities();

    /**
     * Get cash flow statement's total cash flows from operating activities
     *
     * @return float|null
     */
    public function totalCashFlowsFromOperatingActivities();

    /**
     * Get cash flow statement's capital expenditures
     *
     * @return float|null
     */
    public function capitalExpenditures();

    /**
     * Get cash flow statement's investments
     *
     * @return float|null
     */
    public function investments();

    /**
     * Get cash flow statement's other cash flows from investing activities
     *
     * @return float|null
     */
    public function otherCashFlowsFromInvestingActivities();

    /**
     * Get cash flow statement's total cash flows from investing activities
     *
     * @return float|null
     */
    public function totalCashFlowsFromInvestingActivities();

    /**
     * Get cash flow statement's dividends paid
     *
     * @return float|null
     */
    public function dividendsPaid();

    /**
     * Get cash flow statement's net borrowings
     *
     * @return float|null
     */
    public function netBorrowings();

    /**
     * Get cash flow statement's other cash flows from financing activities
     *
     * @return float|null
     */
    public function otherCashFlowsFromFinancingActivities();

    /**
     * Get cash flow statement's total cash flows from financing activities
     *
     * @return float|null
     */
    public function totalCashFlowsFromFinancingActivities();

    /**
     * Get cash flow statement's effect of exchange rate
     *
     * @return float|null
     */
    public function effectOfExchangeRate();

    /**
     * Get cash flow statement's change in cash
     *
     * @return float|null
     */
    public function changeInCash();

    /**
     * Get cash flow statement's repurchase of stock
     *
     * @return float|null
     */
    public function repurchaseOfStock();

    /**
     * Get cash flow statement's issuance of stock
     *
     * @return float|null
     */
    public function issuanceOfStock();
}
