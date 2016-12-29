<?php

namespace CharacterBundle\DataFixtures\ORM;

use CharacterBundle\Entity\PlayerCharacter;
use CharacterBundle\Entity\AptitudeList;
use CharacterBundle\Entity\CharacterDescription;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeneratorBundle\Service\DiceRoller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Faker;

class LoadCharacterData implements FixtureInterface, ContainerAwareInterface
{
    const _COUNT_ = 10;

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i<10; $i++)
            $this->loadSingleCharacter($manager, $faker);

        $manager->flush();
    }

    protected function loadSingleCharacter(ObjectManager $manager, $faker)
    {
        $character = new PlayerCharacter();
        $scores = new AptitudeList();
        $description = new CharacterDescription();

        $values = [];

        for ($i=0; $i<7; $i++)
            $values[] = DiceRoller::roll(5, 20);

        $scores->setAptitudeValues($values);
        $description->setName($faker->name);

        $character->setCharacterDescription($description);
        $character->setAptitudelist($scores);

        $manager->persist($character);
    }
}