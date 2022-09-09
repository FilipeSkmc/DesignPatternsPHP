<?php

namespace Design\Weapons;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return "Mira o ARCO e ATIRA.";
    }
}
