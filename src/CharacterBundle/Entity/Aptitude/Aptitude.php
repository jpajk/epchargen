<?php

namespace CharacterBundle\Entity\Aptitude;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbilityScores
 *
 * @ORM\Table(
 *     name="aptitude",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}
 * )
 * @ORM\Entity(repositoryClass="CharacterBundle\Repository\PlayerCharacterRepository")
 */
class Aptitude
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
     * @ORM\Column(name="name", type="string", length=3)
     */
    private $name;

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
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
