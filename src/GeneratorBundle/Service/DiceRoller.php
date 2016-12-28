<?php

namespace GeneratorBundle\Service;

class DiceRoller
{
    public static function roll($min, $max)
    {
        return mt_rand($min, $max);
    }

    public static function roll1d100()
    {
        return self::roll(0, 99);
    }
}