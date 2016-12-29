<?php

namespace CharacterBundle\DataFixtures\ORM\CharacterFixtures;

use CharacterBundle\Entity\Aptitude\AptitudeValue;
use CharacterBundle\Entity\PlayerCharacter;
use CharacterBundle\Entity\AptitudeList;
use CharacterBundle\Entity\CharacterDescription;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GeneratorBundle\Service\DiceRoller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Faker;
use CharacterBundle\Entity\Aptitude\Aptitude;

class LoadCharacterData implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
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
        $description = new CharacterDescription();

        $aptitudes = $manager->getRepository('CharacterBundle:Aptitude\Aptitude')
                             ->findAll();

        foreach ($aptitudes as $aptitude) {
            $aptitude_value = new AptitudeValue();
            $aptitude_value->setValue(DiceRoller::roll(5, 20));
            $aptitude_value->setAptitude($aptitude);
            $aptitude_value->setPlayerCharacter($character);
            $manager->persist($aptitude_value);
        }

        $description->setName($faker->name);
        $character->setCharacterDescription($description);

        $manager->persist($character);
    }

    public function getOrder()
    {
        return 1;
    }
}