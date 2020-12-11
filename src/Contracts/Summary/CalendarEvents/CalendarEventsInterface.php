<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\CalendarEvents;

interface CalendarEventsInterface
{
    /**
     * Get calendar events' earnings
     *
     * @return EarningsInterface|null
     */
    public function earnings();

    /**
     * Get calendar events' ex dividend date
     *
     * @return string|null
     */
    public function exDividendDate();

    /**
     * Get calendar events' dividend date
     *
     * @return string|null
     */
    public function dividendDate();
}
