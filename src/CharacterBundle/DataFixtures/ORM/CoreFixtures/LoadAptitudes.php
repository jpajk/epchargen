<?php

namespace CharacterBundle\DataFixtures\ORM\CoreFixtures;

use CharacterBundle\Entity\AptitudeList;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use CharacterBundle\Entity\Aptitude\Aptitude;

class LoadAptitudes implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        foreach (Aptitude::_APTITUDES_NAMES_ as $aptitude_name)
            $this->loadSingleAptitude($manager, $aptitude_name);

        $manager->flush();
    }

    protected function loadSingleAptitude(ObjectManager $manager, $name)
    {
        $aptitude = new Aptitude();
        $aptitude->setName($name);
        $manager->persist($aptitude);
    }

    public function getOrder()
    {
        return 0;
    }
}