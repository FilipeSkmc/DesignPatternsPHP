<?php

namespace Design\Classes;

use Design\Weapons\BowAndArrowBehavior;

class Queen extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new BowAndArrowBehavior();
    }

    public function fight(): string
    {
        return "Eu sou QUEEN, sou agil e inteligente.";
    }
}
