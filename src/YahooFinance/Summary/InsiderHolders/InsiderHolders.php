<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\InsiderHolders;

use Yoelpc4\LaravelStock\Contracts\Summary\InsiderHolders\InsiderHoldersInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Holder;

class InsiderHolders implements InsiderHoldersInterface
{
    /**
     * @var Holder[]
     */
    protected $holders;

    /**
     * InsiderHolders constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->holders = array_map(function (array $data) {
            return new Holder($data);
        }, $data['holders'] ?? []);
    }

    /**
     * @inheritDoc
     */
    public function holders()
    {
        return $this->holders;
    }
}
