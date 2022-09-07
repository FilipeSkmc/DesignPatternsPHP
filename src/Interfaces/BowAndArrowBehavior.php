<?php

namespace Design\Interfaces;

class BowAndArrowBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return "Mira o ARCO e ATIRA. <br>";
    }
}
