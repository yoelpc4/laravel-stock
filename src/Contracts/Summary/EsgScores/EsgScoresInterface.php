<?php

namespace Yoelpc4\LaravelStock\Contracts\Summary\EsgScores;

interface EsgScoresInterface
{
    /**
     * Get esg scores's total esg
     *
     * @return float|null
     */
    public function totalEsg();

    /**
     * Get esg scores's environment score
     *
     * @return float|null
     */
    public function environmentScore();

    /**
     * Get esg scores's social score
     *
     * @return float|null
     */
    public function socialScore();

    /**
     * Get esg scores's governance score
     *
     * @return float|null
     */
    public function governanceScore();

    /**
     * Get esg scores's rating year
     *
     * @return int|null
     */
    public function ratingYear();

    /**
     * Get esg scores's rating month
     *
     * @return int|null
     */
    public function ratingMonth();

    /**
     * Get esg scores's highest controversy
     *
     * @return float|null
     */
    public function highestControversy();

    /**
     * Get esg scores's peer count
     *
     * @return int|null
     */
    public function peerCount();

    /**
     * Get esg scores's esg performance
     *
     * @return string|null
     */
    public function esgPerformance();

    /**
     * Get esg scores's peer group
     *
     * @return string|null
     */
    public function peerGroup();

    /**
     * Get esg scores's related controversies
     *
     * @return array
     */
    public function relatedControversies();

    /**
     * Get esg scores's peer esg score performance
     *
     * @return PeerEsgScorePerformanceInterface|null
     */
    public function peerEsgScorePerformance();

    /**
     * Get esg scores's peer governance performance
     *
     * @return PeerGovernancePerformanceInterface|null
     */
    public function peerGovernancePerformance();

    /**
     * Get esg scores's peer social performance
     *
     * @return PeerSocialPerformanceInterface|null
     */
    public function peerSocialPerformance();

    /**
     * Get esg scores's peer environment performance
     *
     * @return PeerEnvironmentPerformanceInterface|null
     */
    public function peerEnvironmentPerformance();

    /**
     * Get esg scores's peer highest controversy performance
     *
     * @return PeerHighestControversyPerformanceInterface|null
     */
    public function peerHighestControversyPerformance();

    /**
     * Get esg scores's percentile
     *
     * @return float|null
     */
    public function percentile();

    /**
     * Get esg scores's environment percentile
     *
     * @return float|null
     */
    public function environmentPercentile();

    /**
     * Get esg scores's social percentile
     *
     * @return float|null
     */
    public function socialPercentile();

    /**
     * Get esg scores's governance percentile
     *
     * @return float|null
     */
    public function governancePercentile();

    /**
     * Get esg scores's adult
     *
     * @return boolean|null
     */
    public function adult();

    /**
     * Get esg scores's alcoholic
     *
     * @return boolean|null
     */
    public function alcoholic();

    /**
     * Get esg scores's animal testing
     *
     * @return boolean|null
     */
    public function animalTesting();

    /**
     * Get esg scores's catholic
     *
     * @return boolean|null
     */
    public function catholic();

    /**
     * Get esg scores's controversial weapons
     *
     * @return boolean|null
     */
    public function controversialWeapons();

    /**
     * Get esg scores's small arms
     *
     * @return boolean|null
     */
    public function smallArms();

    /**
     * Get esg scores's fur leather
     *
     * @return boolean|null
     */
    public function furLeather();

    /**
     * Get esg scores's gambling
     *
     * @return boolean|null
     */
    public function gambling();

    /**
     * Get esg scores's gmo
     *
     * @return boolean|null
     */
    public function gmo();

    /**
     * Get esg scores's military contract
     *
     * @return boolean|null
     */
    public function militaryContract();

    /**
     * Get esg scores's nuclear
     *
     * @return boolean|null
     */
    public function nuclear();

    /**
     * Get esg scores's pesticides
     *
     * @return boolean|null
     */
    public function pesticides();

    /**
     * Get esg scores's palm oil
     *
     * @return boolean|null
     */
    public function palmOil();

    /**
     * Get esg scores's coal
     *
     * @return boolean|null
     */
    public function coal();

    /**
     * Get esg scores's tobacco
     *
     * @return boolean|null
     */
    public function tobacco();
}
