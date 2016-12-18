<?php

namespace CharacterBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbilityScores
 *
 * @ORM\Table(name="ability_scores")
 * @ORM\Entity(repositoryClass="CharacterBundle\Repository\PlayerCharacterRepository")
 */
class AbilityScores
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
     * @var array
     *
     * @ORM\Column(name="ability_scores", type="array")
     */
    private $abilityScoreValues = array(
        'str' => 0,
        'dex' => 0,
        'con' => 0,
        'int' => 0,
        'wis' => 0,
        'cha' => 0,
    );

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
     * Set abilityScoreValues
     *
     * @param array $abilityScoreValues
     *
     * @return AbilityScores
     */
    public function setAbilityScoreValues($abilityScoreValues)
    {
        $this->abilityScoreValues = $abilityScoreValues;

        return $this;
    }

    /**
     * Get abilityScoreValues
     *
     * @return array
     */
    public function getAbilityScoreValues()
    {
        return $this->abilityScoreValues;
    }

    /**
     * Set abilityScore
     *
     * @param string $abilityScoreName
     * @param int $abilityScoreValue
     *
     * @return AbilityScores
     */
    public function setAbilityScore($abilityScoreName, $abilityScoreValue)
    {
        $this->abilityScoreValues[$abilityScoreName] = $abilityScoreValue;

        return $this;
    }
}
