<?php

namespace CharacterBundle\Entity\Skill;

use Doctrine\ORM\Mapping as ORM;

/**
 * OwnedAbility
 *
 * @ORM\Table(name="skill_value")
 * @ORM\Entity(repositoryClass="CharacterBundle\Repository\Skill\OwnedAbilityRepository")
 */
class SkillValue
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
     * @ORM\ManyToOne(targetEntity="Skill", inversedBy="skillValue")
     */
    private $skill;

    /**
     * @ORM\ManyToOne(targetEntity="CharacterBundle\Entity\PlayerCharacter",
     *                inversedBy="skillValues")
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
     * @return SkillValue
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
}

