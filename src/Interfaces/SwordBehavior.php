<?php

namespace Design\Interfaces;

class SwordBehavior implements WeaponBehavior
{
    public function useWeapon(): string
    {
        return "A MOONLIGHT GREATSWORD está sendo usada para o ataque.";
    }
};
