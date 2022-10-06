<?php

namespace Design\Classes;

use Design\Interfaces\Cafe;

abstract class DecoradorCondimento implements Cafe
{
    protected $cafe;

    public function __construct(Cafe $cafe)
    {
        $this->cafe = $cafe;
    }
    abstract public function getDescricao(): string;
    abstract public function custo(): float;
}