<?php

namespace Design\Weapons;

class AxeBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return "Levantar o MACHADO e dar um ataque pesado.";
    }
}
