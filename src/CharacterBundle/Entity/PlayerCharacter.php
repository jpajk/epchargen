<?php

namespace CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerCharacter
 *
 * @ORM\Table(name="player_character")
 * @ORM\Entity(repositoryClass="CharacterBundle\Repository\PlayerCharacterRepository")
 */
class PlayerCharacter
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
     * A character always has one set of descriptive values
     * @ORM\OneToOne(targetEntity="CharacterDescription", cascade={"persist", "remove"})
     */
    private $character_description;

    /**
     * @ORM\OneToMany(
     *     targetEntity="CharacterBundle\Entity\Aptitude\AptitudeValue",
     *     mappedBy="playerCharacter",
     *     cascade={"persist", "remove"}
     * )
     */
    private $aptitudeValues;

    /**
     * @ORM\OneToMany(targetEntity="CharacterBundle\Entity\Skill\SkillValue",
     *                mappedBy="playerCharacter",
     *                cascade={"persist", "remove"})
     */
    private $skillValues;

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
     * Set characterDescription
     *
     * @param \CharacterBundle\Entity\CharacterDescription $characterDescription
     *
     * @return PlayerCharacter
     */
    public function setCharacterDescription(\CharacterBundle\Entity\CharacterDescription $characterDescription = null)
    {
        $this->character_description = $characterDescription;

        return $this;
    }

    /**
     * Get characterDescription
     *
     * @return \CharacterBundle\Entity\CharacterDescription
     */
    public function getCharacterDescription()
    {
        return $this->character_description;
    }

    /**
     * @return mixed
     */
    public function getAptitudeValues()
    {
        return $this->aptitudeValues;
    }

    /**
     * @return mixed
     */
    public function getSkillValues()
    {
        return $this->skillValues;
    }
}
