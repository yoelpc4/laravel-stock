<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions;

interface TransactionInterface
{
    /**
     * Get transaction's shares
     *
     * @return int|null
     */
    public function shares();

    /**
     * Get transaction's value
     *
     * @return int|null
     */
    public function value();

    /**
     * Get transaction's filer url
     *
     * @return string|null
     */
    public function filerUrl();

    /**
     * Get transaction's transaction text
     *
     * @return string|null
     */
    public function transactionText();

    /**
     * Get transaction's filer name
     *
     * @return string|null
     */
    public function filerName();

    /**
     * Get transaction's filer relation
     *
     * @return string|null
     */
    public function filerRelation();

    /**
     * Get transaction's money text
     *
     * @return string|null
     */
    public function moneyText();

    /**
     * Get transaction's start date
     *
     * @return string|null
     */
    public function startDate();

    /**
     * Get transaction's ownership
     *
     * @return string|null
     */
    public function ownership();
}
