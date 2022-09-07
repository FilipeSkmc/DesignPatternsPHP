<?php

namespace Design\Classes;

use Design\Interfaces\AxeBehavior;

class Viking extends Character
{
    public function __construct()
    {
        $this->weaponBehavior = new AxeBehavior();
    }

    public function fight(): string
    {
        return "Sou VIKING, guerreiro forte e lento.";
    }
}