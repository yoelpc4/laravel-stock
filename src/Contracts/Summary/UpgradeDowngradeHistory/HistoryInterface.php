<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\UpgradeDowngradeHistory;

interface HistoryInterface
{
    /**
     * Get history's epoch grade date
     *
     * @return int|null
     */
    public function epochGradeDate();

    /**
     * Get history's firm
     *
     * @return string|null
     */
    public function firm();

    /**
     * Get history's to grade
     *
     * @return string|null
     */
    public function toGrade();

    /**
     * Get history's from grade
     *
     * @return string|null
     */
    public function fromGrade();

    /**
     * Get history's action
     *
     * @return string|null
     */
    public function action();
}
