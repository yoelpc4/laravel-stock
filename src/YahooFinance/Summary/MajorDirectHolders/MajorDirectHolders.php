<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\MajorDirectHolders;

use Yoelpc4\LaravelStock\Contracts\Summary\MajorDirectHolders\MajorDirectHoldersInterface;
use Yoelpc4\LaravelStock\YahooFinance\Summary\Holder;

class MajorDirectHolders implements MajorDirectHoldersInterface
{
    /**
     * @var Holder[]
     */
    protected $holders;

    /**
     * MajorDirectHolders constructor.
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
