<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\InsiderTransactions;

use Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions\InsiderTransactionsInterface;

class InsiderTransactions implements InsiderTransactionsInterface
{
    /**
     * @var Transaction[]
     */
    protected $transactions;

    /**
     * InsiderTransactions constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->transactions = array_map(function (array $data) {
            return new Transaction($data);
        }, $data['transactions'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function transactions()
    {
        return $this->transactions;
    }
}
