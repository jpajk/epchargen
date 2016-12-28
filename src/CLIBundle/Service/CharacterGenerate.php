<?php

namespace CLIBundle\Service;

class CharacterGenerate
{
    private $service_container;

    public function __construct($service_container)
    {
        $this->setServiceContainer($service_container);
    }

    public function dispatchCharacterGeneration()
    {
        $this->generate();
    }

    protected function generate()
    {
        exit("Done\n");
    }

    /**
     * @return mixed
     */
    public function getServiceContainer()
    {
        return $this->service_container;
    }

    /**
     * @param mixed $service_container
     */
    public function setServiceContainer($service_container)
    {
        $this->service_container = $service_container;
    }
}