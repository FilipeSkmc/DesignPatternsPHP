<?php

declare(strict_types=1);

use Design\Classes\{Descafeinado, Expresso, MisturaDaCasa, AddCanela, AddChocolate, AddLeite};
use Design\Interfaces\Cafe;

use PHPUnit\Framework\TestCase;

final class CafeCondimentadoTest extends TestCase
{
    protected Cafe $expresso;
    protected Cafe $descafeinado;
    protected Cafe $misturaDaCasa;

    public function setUp() : void
    {
        $this->expresso = new Expresso();
        $this->descafeinado = new Descafeinado();
        $this->misturaDaCasa = new MisturaDaCasa();
    }

    public function testCustoDescricaoExpressoSuccess(): void
    {
        $custoTest = $this->expresso->custo();
        $this->assertEquals(1.99, $custoTest);
        
        $expected = 'Café Expresso';
        $this->expectOutputString($expected);
        echo $this->expresso->getDescricao();
    }

    public function testCustoDescricaoDescafeinadoSuccess(): void
    {
        $custoTest = $this->descafeinado->custo();
        $this->assertEquals(0.89, $custoTest);
        
        $expected = 'Café Descafeinado';
        $this->expectOutputString($expected);
        echo $this->descafeinado->getDescricao();
    }

    public function testCustoDescricaoMisturaDaCasaSuccess(): void
    {
        $custoTest = $this->misturaDaCasa->custo();
        $this->assertEquals(2.99, $custoTest);
        
        $expected = 'Café Mistura da Casa';
        $this->expectOutputString($expected);
        echo $this->misturaDaCasa->getDescricao();
    }

    public function testCustoMisturaDaCasaDecoradoComTodosCondimentos(): void
    {
        $this->misturaDaCasa = new AddLeite($this->misturaDaCasa);
        $this->misturaDaCasa = new AddCanela($this->misturaDaCasa);
        $this->misturaDaCasa = new AddChocolate($this->misturaDaCasa);

        $this->assertEquals(3.56, $this->misturaDaCasa->custo());
    }

    public function testGetDescricaoDescafeinadoDecoradoComTodosCondimentos(): void
    {
        $this->descafeinado = new AddLeite($this->descafeinado);
        $this->descafeinado = new AddCanela($this->descafeinado);
        $this->descafeinado = new AddChocolate($this->descafeinado);

        $expected = "Café Descafeinado, Leite, Canela, Chocolate";
        $this->expectOutputString($expected);
        echo $this->descafeinado->getDescricao();
    }
}