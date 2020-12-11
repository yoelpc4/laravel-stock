<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\UpgradeDowngradeHistory;

use Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory\HistoryInterface;

class History implements HistoryInterface
{
    /**
     * @var int|null
     */
    protected $epochGradeDate;

    /**
     * @var string|null
     */
    protected $firm;

    /**
     * @var string|null
     */
    protected $toGrade;

    /**
     * @var string|null
     */
    protected $fromGrade;

    /**
     * @var string|null
     */
    protected $action;

    /**
     * History constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->epochGradeDate = $data['epochGradeDate'] ?? null;

        $this->firm = $data['firm'] ?? null;

        $this->toGrade = $data['toGrade'] ?? null;

        $this->fromGrade = $data['fromGrade'] ?? null;

        $this->action = $data['action'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function epochGradeDate()
    {
        return $this->epochGradeDate;
    }

    /**
     * @inheritDoc
     */
    public function firm()
    {
        return $this->firm;
    }

    /**
     * @inheritDoc
     */
    public function toGrade()
    {
        return $this->toGrade;
    }

    /**
     * @inheritDoc
     */
    public function fromGrade()
    {
        return $this->fromGrade;
    }

    /**
     * @inheritDoc
     */
    public function action()
    {
        return $this->action;
    }
}
