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
     * A character always has one set of ability scores
     * @ORM\OneToOne(targetEntity="AbilityScores")
     */
    private $ability_scores;

    /**
     * A character always has one set of descriptive values
     * @ORM\OneToOne(targetEntity="CharacterDescription")
     */
    private $character_description;

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
     * Set abilityScores
     *
     * @param \CharacterBundle\Entity\AbilityScores $abilityScores
     *
     * @return PlayerCharacter
     */
    public function setAbilityScores(\CharacterBundle\Entity\AbilityScores $abilityScores = null)
    {
        $this->ability_scores = $abilityScores;

        return $this;
    }

    /**
     * Get abilityScores
     *
     * @return \CharacterBundle\Entity\AbilityScores
     */
    public function getAbilityScores()
    {
        return $this->ability_scores;
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
}
