<?php

namespace Design\Classes;

use Design\Weapons\KnifeBehavior;

class Thief extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new KnifeBehavior();
    }

    public function fight(): string
    {
        return "Eu sou THIEF, ataco na sudina.";
    }
}
