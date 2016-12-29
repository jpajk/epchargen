<?php

namespace CharacterBundle\Entity\Aptitude;

use Doctrine\ORM\Mapping as ORM;

/**
 * AptitudeValue
 *
 * @ORM\Table(
 *     name="aptitude_value",
 *     uniqueConstraints={
 *        @ORM\UniqueConstraint(
 *          name="player_aptitude", columns={"player_character_id", "aptitude_id"}
 *        )
 *     }
 * )
 * @ORM\Entity(repositoryClass="CharacterBundle\Repository\Aptitude\AptitudeValueRepository")
 */
class AptitudeValue
{
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
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity="Aptitude")
     */
    private $aptitude;

    /**
     * @ORM\ManyToOne(
     *     targetEntity="CharacterBundle\Entity\PlayerCharacter",
     *     inversedBy="aptitudeValues",
     *     cascade={"persist"}
     * )
     */
    private $playerCharacter;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return AptitudeValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getAptitude()
    {
        return $this->aptitude;
    }

    /**
     * @param mixed $aptitude
     */
    public function setAptitude($aptitude)
    {
        $this->aptitude = $aptitude;
    }

    /**
     * @return mixed
     */
    public function getPlayerCharacter()
    {
        return $this->playerCharacter;
    }

    /**
     * @param mixed $playerCharacter
     */
    public function setPlayerCharacter($playerCharacter)
    {
        $this->playerCharacter = $playerCharacter;
    }
}

