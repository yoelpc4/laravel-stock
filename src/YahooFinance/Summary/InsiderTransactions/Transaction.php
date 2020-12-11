<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\InsiderTransactions;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\InsiderTransactions\TransactionInterface;

class Transaction implements TransactionInterface
{
    /**
     * @var int|null
     */
    protected $shares;

    /**
     * @var int|null
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $filerUrl;

    /**
     * @var string|null
     */
    protected $transactionText;

    /**
     * @var string|null
     */
    protected $filerName;

    /**
     * @var string|null
     */
    protected $filerRelation;

    /**
     * @var string|null
     */
    protected $moneyText;

    /**
     * @var string|null
     */
    protected $startDate;

    /**
     * @var string|null
     */
    protected $ownership;

    /**
     * Transaction constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->shares = Arr::get($data, 'shares.raw');

        $this->value = Arr::get($data, 'value.raw');

        $this->filerUrl = $data['filerUrl'] ?? null;

        $this->transactionText = $data['transactionText'] ?? null;

        $this->filerName = $data['filerName'] ?? null;

        $this->filerRelation = $data['filerRelation'] ?? null;

        $this->moneyText = $data['moneyText'] ?? null;

        $this->startDate = Arr::get($data, 'startDate.fmt');

        $this->ownership = $data['ownership'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function shares()
    {
        return $this->shares;
    }

    /**
     * @inheritDoc
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * @inheritDoc
     */
    public function filerUrl()
    {
        return $this->filerUrl;
    }

    /**
     * @inheritDoc
     */
    public function transactionText()
    {
        return $this->transactionText;
    }

    /**
     * @inheritDoc
     */
    public function filerName()
    {
        return $this->filerName;
    }

    /**
     * @inheritDoc
     */
    public function filerRelation()
    {
        return $this->filerRelation;
    }

    /**
     * @inheritDoc
     */
    public function moneyText()
    {
        return $this->moneyText;
    }

    /**
     * @inheritDoc
     */
    public function startDate()
    {
        return $this->startDate;
    }

    /**
     * @inheritDoc
     */
    public function ownership()
    {
        return $this->ownership;
    }
}
