<?php

namespace Design\Weapons;

class KnifeBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return "Lança a KNIFE a Distancia.";
    }
}
