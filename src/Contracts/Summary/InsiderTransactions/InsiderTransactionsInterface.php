<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions;

interface InsiderTransactionsInterface
{
    /**
     * Get insider transactions' transactions
     *
     * @return TransactionInterface[]
     */
    public function transactions();
}
