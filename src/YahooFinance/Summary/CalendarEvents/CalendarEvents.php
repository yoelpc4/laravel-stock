<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\CalendarEvents;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents\CalendarEventsInterface;

class CalendarEvents implements CalendarEventsInterface
{
    /**
     * @var Earnings|null
     */
    protected $earnings;

    /**
     * @var string|null
     */
    protected $exDividendDate;

    /**
     * @var string|null
     */
    protected $dividendDate;

    /**
     * CalendarEvents constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $earnings = $data['earnings'] ?? null;

        if ($earnings) {
            $this->earnings = new Earnings($earnings);
        }

        $this->exDividendDate = Arr::get($data, 'exDividendDate.fmt');

        $this->dividendDate = Arr::get($data, 'dividendDate.fmt');
    }

    /**
     * @inheritDoc
     */
    public function earnings()
    {
        return $this->earnings;
    }

    /**
     * @inheritDoc
     */
    public function exDividendDate()
    {
        return $this->exDividendDate;
    }

    /**
     * @inheritDoc
     */
    public function dividendDate()
    {
        return $this->dividendDate;
    }
}
