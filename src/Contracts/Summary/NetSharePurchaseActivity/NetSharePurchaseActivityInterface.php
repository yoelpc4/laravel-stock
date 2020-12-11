<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\NetSharePurchaseActivity;

interface NetSharePurchaseActivityInterface
{
    /**
     * Get net share purchase activity's period
     *
     * @return string|null
     */
    public function period();

    /**
     * Get net share purchase activity's buy info count
     *
     * @return int|null
     */
    public function buyInfoCount();

    /**
     * Get net share purchase activity's buy info shares
     *
     * @return int|null
     */
    public function buyInfoShares();

    /**
     * Get net share purchase activity's buy percent insider shares (%)
     *
     * @return float|null
     */
    public function buyPercentInsiderShares();

    /**
     * Get net share purchase activity's sell info count
     *
     * @return int|null
     */
    public function sellInfoCount();

    /**
     * Get net share purchase activity's sell info shares
     *
     * @return int|null
     */
    public function sellInfoShares();

    /**
     * Get net share purchase activity's sell percent insider shares (%)
     *
     * @return float|null
     */
    public function sellPercentInsiderShares();

    /**
     * Get net share purchase activity's net info count
     *
     * @return int|null
     */
    public function netInfoCount();

    /**
     * Get net share purchase activity's net info shares
     *
     * @return float|null
     */
    public function netInfoShares();

    /**
     * Get net share purchase activity's net percent insider shares (%)
     *
     * @return float|null
     */
    public function netPercentInsiderShares();

    /**
     * Get net share purchase activity's total insider shares
     *
     * @return int|null
     */
    public function totalInsiderShares();
}
