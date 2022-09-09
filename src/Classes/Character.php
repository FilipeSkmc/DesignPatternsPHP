<?php

namespace Design\Classes;

use Design\Weapons\WeaponBehavior;

abstract class Character
{
    protected WeaponBehavior $weaponBehavior;

    abstract public function fight(): string;

    public function setPerformWeapon(WeaponBehavior $newWeapon)
    {
        $this->weaponBehavior = $newWeapon;
    }

    public function performWeapon(): string
    {
        return $this->weaponBehavior->useWeapon();
    }
}
