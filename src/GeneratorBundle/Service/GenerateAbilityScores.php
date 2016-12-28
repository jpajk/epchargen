<?php

namespace GeneratorBundle\Service;

class GenerateAbilityScores
{
    public static function generateAll()
    {
        $return = [];

        for ($i=0; $i<10; $i++)
            $return[] = self::generateSingle();

        return $return;
    }

    public static function generateSingle()
    {
        $values = [];

        for ($i=0; $i<4; $i++)
            $values[] = DiceRoller::roll(1, 6);

        $key = array_search(min($values), $values);

        unset($values[$key]);

        return array_sum($values);
    }

}