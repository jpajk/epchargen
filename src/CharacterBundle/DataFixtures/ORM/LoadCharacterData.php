<?php

namespace CharacterBundle\DataFixtures\ORM;

use CharacterBundle\Entity\PlayerCharacter;
use CharacterBundle\Entity\AbilityScores;
use CharacterBundle\Entity\CharacterDescription;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCharacterData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

    }

    protected function loadSingleCharacter()
    {
        $character = new PlayerCharacter();
        $scores = new AbilityScores();
        $description = new CharacterDescription();

        $scores->setAbilityScoreValues([

        ]);
    }
}