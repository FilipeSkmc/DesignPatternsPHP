<?php

namespace Design\Classes;

use Design\Interfaces\Cafe;

class Expresso implements Cafe
{
    public function getDescricao(): string
    {
        return "Café Expresso";
    }

    public function custo(): float
    {
        return 1.99;
    }
}