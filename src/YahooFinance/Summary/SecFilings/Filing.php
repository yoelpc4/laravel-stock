<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\SecFilings;

use Yoelpc4\LaravelStock\Contracts\Summary\SecFillings\FilingInterface;

class Filing implements FilingInterface
{
    /**
     * @var string|null
     */
    protected $date;

    /**
     * @var int|null
     */
    protected $epochDate;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $title;

    /**
     * @var string|null
     */
    protected $edgarUrl;

    /**
     * Filing constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->date = $data['date'] ?? null;

        $this->epochDate = $data['epochDate'] ?? null;

        $this->type = $data['type'] ?? null;

        $this->title = $data['title'] ?? null;

        $this->edgarUrl = $data['edgarUrl'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function date()
    {
        return $this->date;
    }

    /**
     * @inheritDoc
     */
    public function epochDate()
    {
        return $this->epochDate;
    }

    /**
     * @inheritDoc
     */
    public function type()
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function title()
    {
        return $this->title;
    }

    /**
     * @inheritDoc
     */
    public function edgarUrl()
    {
        return $this->edgarUrl;
    }
}
