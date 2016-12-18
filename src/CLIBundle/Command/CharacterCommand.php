<?php

namespace CLIBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CharacterCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('character:generate')
            ->setDescription('Generate a simple character')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->dispatchCharacterGeneration();
    }

    protected function dispatchCharacterGeneration()
    {
        $this->getContainer()
             ->get('character.generate')
             ->dispatchCharacterGeneration();
    }
}