<?php

namespace Yoelpc4\LaravelStock\YahooFinance\Summary\EsgScores;

use Illuminate\Support\Arr;
use Yoelpc4\LaravelStock\Contracts\Summary\EsgScores\EsgScoresInterface;

class EsgScores implements EsgScoresInterface
{
    /**
     * @var float|null
     */
    protected $totalEsg;

    /**
     * @var float|null
     */
    protected $environmentScore;

    /**
     * @var float|null
     */
    protected $socialScore;

    /**
     * @var float|null
     */
    protected $governanceScore;

    /**
     * @var int|null
     */
    protected $ratingYear;

    /**
     * @var int|null
     */
    protected $ratingMonth;

    /**
     * @var float|null
     */
    protected $highestControversy;

    /**
     * @var int|null
     */
    protected $peerCount;

    /**
     * @var string|null
     */
    protected $esgPerformance;

    /**
     * @var string|null
     */
    protected $peerGroup;

    /**
     * @var array
     */
    protected $relatedControversies;

    /**
     * @var PeerEsgScorePerformance|null
     */
    protected $peerEsgScorePerformance;

    /**
     * @var PeerGovernancePerformance|null
     */
    protected $peerGovernancePerformance;

    /**
     * @var PeerSocialPerformance|null
     */
    protected $peerSocialPerformance;

    /**
     * @var PeerEnvironmentPerformance|null
     */
    protected $peerEnvironmentPerformance;

    /**
     * @var PeerHighestControversyPerformance|null
     */
    protected $peerHighestControversyPerformance;

    /**
     * @var float|null
     */
    protected $percentile;

    /**
     * @var float|null
     */
    protected $environmentPercentile;

    /**
     * @var float|null
     */
    protected $socialPercentile;

    /**
     * @var float|null
     */
    protected $governancePercentile;

    /**
     * @var boolean|null
     */
    protected $adult;

    /**
     * @var boolean|null
     */
    protected $alcoholic;

    /**
     * @var boolean|null
     */
    protected $animalTesting;

    /**
     * @var boolean|null
     */
    protected $catholic;

    /**
     * @var boolean|null
     */
    protected $controversialWeapons;

    /**
     * @var boolean|null
     */
    protected $smallArms;

    /**
     * @var boolean|null
     */
    protected $furLeather;

    /**
     * @var boolean|null
     */
    protected $gambling;

    /**
     * @var boolean|null
     */
    protected $gmo;

    /**
     * @var boolean|null
     */
    protected $militaryContract;

    /**
     * @var boolean|null
     */
    protected $nuclear;

    /**
     * @var boolean|null
     */
    protected $pesticides;

    /**
     * @var boolean|null
     */
    protected $palmOil;

    /**
     * @var boolean|null
     */
    protected $coal;

    /**
     * @var boolean|null
     */
    protected $tobacco;

    /**
     * EsgScores constructor.
     *
     * @param  array  $data
     */
    public function __construct(array $data)
    {
        $this->totalEsg = Arr::get($data, 'totalEsg.raw');

        $this->environmentScore = Arr::get($data, 'environmentScore.raw');

        $this->socialScore = Arr::get($data, 'socialScore.raw');

        $this->governanceScore = Arr::get($data, 'governanceScore.raw');

        $this->ratingYear = $data['ratingYear'] ?? null;

        $this->ratingMonth = $data['ratingMonth'] ?? null;

        $this->highestControversy = $data['highestControversy'] ?? null;

        $this->esgPerformance = $data['esgPerformance'] ?? null;

        $this->peerGroup = $data['peerGroup'] ?? null;

        $this->relatedControversies = $data['relatedControversy'] ?? [];

        $peerEsgScorePerformance = $data['peerEsgScorePerformance'] ?? null;

        if ($peerEsgScorePerformance) {
            $this->peerEsgScorePerformance = new PeerEsgScorePerformance($peerEsgScorePerformance);
        }

        $peerGovernancePerformance = $data['peerGovernancePerformance'] ?? null;

        if ($peerGovernancePerformance) {
            $this->peerGovernancePerformance = new PeerGovernancePerformance($peerGovernancePerformance);
        }

        $peerSocialPerformance = $data['peerSocialPerformance'] ?? null;

        if ($peerSocialPerformance) {
            $this->peerSocialPerformance = new PeerSocialPerformance($peerSocialPerformance);
        }

        $peerEnvironmentPerformance = $data['peerEnvironmentPerformance'] ?? null;

        if ($peerEnvironmentPerformance) {
            $this->peerEnvironmentPerformance = new PeerEnvironmentPerformance($peerEnvironmentPerformance);
        }

        $peerHighestControversyPerformance = $data['peerHighestControversyPerformance'] ?? null;

        if ($peerHighestControversyPerformance) {
            $this->peerHighestControversyPerformance = new PeerHighestControversyPerformance($peerHighestControversyPerformance);
        }

        $this->percentile = Arr::get($data, 'percentile.raw');

        $this->environmentPercentile = Arr::get($data, 'environmentPercentile.raw');

        $this->socialPercentile = Arr::get($data, 'socialPercentile.raw');

        $this->governancePercentile = Arr::get($data, 'governancePercentile.raw');

        $this->adult = $data['adult'] ?? null;

        $this->alcoholic = $data['alcoholic'] ?? null;

        $this->animalTesting = $data['animalTesting'] ?? null;

        $this->catholic = $data['catholic'] ?? null;

        $this->controversialWeapons = $data['controversialWeapons'] ?? null;

        $this->smallArms = $data['smallArms'] ?? null;

        $this->furLeather = $data['furLeather'] ?? null;

        $this->gambling = $data['gambling'] ?? null;

        $this->gmo = $data['gmo'] ?? null;

        $this->militaryContract = $data['militaryContract'] ?? null;

        $this->nuclear = $data['nuclear'] ?? null;

        $this->pesticides = $data['pesticides'] ?? null;

        $this->palmOil = $data['palmOil'] ?? null;

        $this->coal = $data['coal'] ?? null;

        $this->tobacco = $data['tobacco'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function totalEsg()
    {
        return $this->totalEsg;
    }

    /**
     * @inheritDoc
     */
    public function environmentScore()
    {
        return $this->environmentScore;
    }

    /**
     * @inheritDoc
     */
    public function socialScore()
    {
        return $this->socialScore;
    }

    /**
     * @inheritDoc
     */
    public function governanceScore()
    {
        return $this->governanceScore;
    }

    /**
     * @inheritDoc
     */
    public function ratingYear()
    {
        return $this->ratingYear;
    }

    /**
     * @inheritDoc
     */
    public function ratingMonth()
    {
        return $this->ratingMonth;
    }

    /**
     * @inheritDoc
     */
    public function highestControversy()
    {
        return $this->highestControversy;
    }

    /**
     * @inheritDoc
     */
    public function peerCount()
    {
        return $this->peerCount;
    }

    /**
     * @inheritDoc
     */
    public function esgPerformance()
    {
        return $this->esgPerformance;
    }

    /**
     * @inheritDoc
     */
    public function peerGroup()
    {
        return $this->peerGroup;
    }

    /**
     * @inheritDoc
     */
    public function relatedControversies()
    {
        return $this->relatedControversies;
    }

    /**
     * @inheritDoc
     */
    public function peerEsgScorePerformance()
    {
        return $this->peerEsgScorePerformance;
    }

    /**
     * @inheritDoc
     */
    public function peerGovernancePerformance()
    {
        return $this->peerGovernancePerformance;
    }

    /**
     * @inheritDoc
     */
    public function peerSocialPerformance()
    {
        return $this->peerSocialPerformance;
    }

    /**
     * @inheritDoc
     */
    public function peerEnvironmentPerformance()
    {
        return $this->peerEnvironmentPerformance;
    }

    /**
     * @inheritDoc
     */
    public function peerHighestControversyPerformance()
    {
        return $this->peerHighestControversyPerformance;
    }

    /**
     * @inheritDoc
     */
    public function percentile()
    {
        return $this->percentile;
    }

    /**
     * @inheritDoc
     */
    public function environmentPercentile()
    {
        return $this->environmentPercentile;
    }

    /**
     * @inheritDoc
     */
    public function socialPercentile()
    {
        return $this->socialPercentile;
    }

    /**
     * @inheritDoc
     */
    public function governancePercentile()
    {
        return $this->governancePercentile;
    }

    /**
     * @inheritDoc
     */
    public function adult()
    {
        return $this->adult;
    }

    /**
     * @inheritDoc
     */
    public function alcoholic()
    {
        return $this->alcoholic;
    }

    /**
     * @inheritDoc
     */
    public function animalTesting()
    {
        return $this->animalTesting;
    }

    /**
     * @inheritDoc
     */
    public function catholic()
    {
        return $this->catholic;
    }

    /**
     * @inheritDoc
     */
    public function controversialWeapons()
    {
        return $this->controversialWeapons;
    }

    /**
     * @inheritDoc
     */
    public function smallArms()
    {
        return $this->smallArms;
    }

    /**
     * @inheritDoc
     */
    public function furLeather()
    {
        return $this->furLeather;
    }

    /**
     * @inheritDoc
     */
    public function gambling()
    {
        return $this->gambling;
    }

    /**
     * @inheritDoc
     */
    public function gmo()
    {
        return $this->gmo;
    }

    /**
     * @inheritDoc
     */
    public function militaryContract()
    {
        return $this->militaryContract;
    }

    /**
     * @inheritDoc
     */
    public function nuclear()
    {
        return $this->nuclear;
    }

    /**
     * @inheritDoc
     */
    public function pesticides()
    {
        return $this->pesticides;
    }

    /**
     * @inheritDoc
     */
    public function palmOil()
    {
        return $this->palmOil;
    }

    /**
     * @inheritDoc
     */
    public function coal()
    {
        return $this->coal;
    }

    /**
     * @inheritDoc
     */
    public function tobacco()
    {
        return $this->tobacco;
    }
}
