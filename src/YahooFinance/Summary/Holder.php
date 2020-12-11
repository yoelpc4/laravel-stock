<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\HolderInterface;

class Holder implements HolderInterface
{
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $relation;

    /**
     * @var string|null
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $transactionDescription;

    /**
     * @var string|null
     */
    protected $latestTransactionDate;

    /**
     * @var float|null
     */
    protected $positionDirect;

    /**
     * @var string|null
     */
    protected $positionDirectDate;

    /**
     * @var float|null
     */
    protected $positionIndirect;

    /**
     * @var string|null
     */
    protected $positionIndirectDate;

    /**
     * Holder constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? null;

        $this->relation = $data['relation'] ?? null;

        $this->url = $data['url'] ?? null;

        $this->transactionDescription = $data['transactionDescription'] ?? null;

        $this->latestTransactionDate = Arr::get($data, 'latestTransDate.fmt');

        $this->positionDirect = Arr::get($data, 'positionDirect.raw');

        $this->positionDirectDate = Arr::get($data, 'positionDirectDate.fmt');

        $this->positionIndirect = Arr::get($data, 'positionIndirect.raw');

        $this->positionIndirectDate = Arr::get($data, 'positionIndirectDate.fmt');
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function relation()
    {
        return $this->relation;
    }

    /**
     * @inheritDoc
     */
    public function url()
    {
        return $this->url;
    }

    /**
     * @inheritDoc
     */
    public function transactionDescription()
    {
        return $this->transactionDescription;
    }

    /**
     * @inheritDoc
     */
    public function latestTransactionDate()
    {
        return $this->latestTransactionDate;
    }

    /**
     * @inheritDoc
     */
    public function positionDirect()
    {
        return $this->positionDirect;
    }

    /**
     * @inheritDoc
     */
    public function positionDirectDate()
    {
        return $this->positionDirectDate;
    }

    /**
     * @inheritDoc
     */
    public function positionIndirect()
    {
        return $this->positionIndirect;
    }

    /**
     * @inheritDoc
     */
    public function positionIndirectDate()
    {
        return $this->positionIndirectDate;
    }
}
