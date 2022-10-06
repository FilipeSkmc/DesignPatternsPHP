<?php

namespace Design\Classes;

use Design\Interfaces\Cafe;

class MisturaDaCasa implements Cafe
{
    public function getDescricao(): string
    {
        return "Café Mistura da Casa";
    }

    public function custo(): float
    {
        return 2.99;
    }
}