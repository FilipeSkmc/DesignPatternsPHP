<?php

namespace Design\Classes;

use Design\Weapons\SwordBehavior;

class King extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new SwordBehavior();
    }

    public function fight(): string
    {
        return "Eu sou KING, agil e mortal.";
    }
}
