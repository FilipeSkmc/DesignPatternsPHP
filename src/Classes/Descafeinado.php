<?php

namespace Design\Classes;

use Design\Interfaces\Cafe;

class Descafeinado implements Cafe
{
    public function getDescricao(): string
    {
        return "Café Descafeinado";
    }

    public function custo(): float
    {
        return 0.89;
    }
}