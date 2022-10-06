<?php

namespace Design\Classes;

use Design\Classes\DecoradorCondimento;

class AddLeite extends DecoradorCondimento
{
    public function getDescricao(): string
    {
        return $this->cafe->getDescricao().", Leite";
    }

    public function custo(): float
    {
        return 0.09 + $this->cafe->custo();
    }
}