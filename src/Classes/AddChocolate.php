<?php

namespace Design\Classes;

use Design\Classes\DecoradorCondimento;

class AddChocolate extends DecoradorCondimento
{
    public function getDescricao(): string
    {
        return $this->cafe->getDescricao().", Chocolate";
    }

    public function custo(): float
    {
        return 0.19 + $this->cafe->custo();
    }

}