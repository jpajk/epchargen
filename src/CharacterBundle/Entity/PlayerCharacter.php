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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var array
     *
     * @ORM\Column(name="ability_scores", type="array")
     */
    private $abilityScores;


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
     * Set name
     *
     * @param string $name
     *
     * @return PlayerCharacter
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set abilityScores
     *
     * @param array $abilityScores
     *
     * @return PlayerCharacter
     */
    public function setAbilityScores($abilityScores)
    {
        $this->abilityScores = $abilityScores;

        return $this;
    }

    /**
     * Get abilityScores
     *
     * @return array
     */
    public function getAbilityScores()
    {
        return $this->abilityScores;
    }
}

