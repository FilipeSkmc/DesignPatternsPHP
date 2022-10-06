<?php

namespace Design\Classes;

use Design\Classes\DecoradorCondimento;

class AddCanela extends DecoradorCondimento
{
    public function getDescricao(): string
    {
        return $this->cafe->getDescricao().", Canela";
    }

    public function custo(): float
    {
        return 0.29 + $this->cafe->custo();
    }
}