<?php

namespace CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbilityScores
 *
 * @ORM\Table(name="aptitude_list")
 * @ORM\Entity(repositoryClass="CharacterBundle\Repository\PlayerCharacterRepository")
 */
class AptitudeList
{
    const _APTITUDES_NAMES_ = [
        'cog', 'coo', 'int', 'ref', 'sav', 'som', 'wil'
    ];

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="cog_value", type="integer")
     */
    private $cog_value;

    /**
     * @var int
     * @ORM\Column(name="coo_value", type="integer")
     */
    private $coo_value;

    /**
     * @var int
     * @ORM\Column(name="int_value", type="integer")
     */
    private $int_value;

    /**
     * @var int
     * @ORM\Column(name="ref_value", type="integer")
     */
    private $ref_value;

    /**
     * @var int
     * @ORM\Column(name="sav_value", type="integer")
     */
    private $sav_value;

    /**
     * @var int
     * @ORM\Column(name="som_value", type="integer")
     */
    private $som_value;

    /**
     * @var int
     * @ORM\Column(name="wil_value", type="integer")
     */
    private $wil_value;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $name
     * @param $value
     * @return $this
     */
    public function setAptitudeValue($name, $value)
    {
        $this->{'set' . ucfirst(strtolower($name)) . 'Value'}($value);

        return $this;
    }

    public function setAptitudeValues(array $values)
    {
        if (!count($values) === 7)
            return false;

        foreach ($values as $index => $value)
            $this->setAptitudeValue(self::_APTITUDES_NAMES_[$index], $value);

        return $this;
    }

    /**
     * @return int
     */
    public function getCogValue()
    {
        return $this->cog_value;
    }

    /**
     * @param int $cog_value
     */
    public function setCogValue($cog_value)
    {
        $this->cog_value = $cog_value;
    }

    /**
     * @return int
     */
    public function getCooValue()
    {
        return $this->coo_value;
    }

    /**
     * @param int $coo_value
     */
    public function setCooValue($coo_value)
    {
        $this->coo_value = $coo_value;
    }

    /**
     * @return int
     */
    public function getIntValue()
    {
        return $this->int_value;
    }

    /**
     * @param int $int_value
     */
    public function setIntValue($int_value)
    {
        $this->int_value = $int_value;
    }

    /**
     * @return int
     */
    public function getRefValue()
    {
        return $this->ref_value;
    }

    /**
     * @param int $ref_value
     */
    public function setRefValue($ref_value)
    {
        $this->ref_value = $ref_value;
    }

    /**
     * @return int
     */
    public function getSavValue()
    {
        return $this->sav_value;
    }

    /**
     * @param int $sav_value
     */
    public function setSavValue($sav_value)
    {
        $this->sav_value = $sav_value;
    }

    /**
     * @return int
     */
    public function getSomValue()
    {
        return $this->som_value;
    }

    /**
     * @param int $som_value
     */
    public function setSomValue($som_value)
    {
        $this->som_value = $som_value;
    }

    /**
     * @return int
     */
    public function getWilValue()
    {
        return $this->wil_value;
    }

    /**
     * @param int $wil_value
     */
    public function setWilValue($wil_value)
    {
        $this->wil_value = $wil_value;
    }

}
