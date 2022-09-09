<?php

declare(strict_types=1);

use Design\Classes\King;
use Design\Classes\Queen;
use Design\Classes\Thief;
use Design\Classes\Viking;
use Design\Weapons\AxeBehavior;
use Design\Weapons\BowAndArrowBehavior;
use Design\Weapons\KnifeBehavior;
use Design\Weapons\SwordBehavior;
use PHPUnit\Framework\TestCase;

final class CharacterTest extends TestCase
{
    protected King $king;
    protected Queen $queen;
    protected Thief $thief;
    protected Viking $viking;

    public function setUp(): void
    {
        $this->king = new King();
        $this->queen = new Queen();
        $this->viking = new Viking();
        $this->thief = new Thief();
    }

    public function testReturnFightKingSuccess(): void
    {
        $this->assertEquals("Eu sou KING, agil e mortal.", $this->king->fight());
        $this->assertEquals('A MOONLIGHT GREATSWORD está sendo usada para o ataque.', $this->king->performWeapon());

        $this->king->setPerformWeapon(new AxeBehavior());
        $this->assertEquals("Levantar o MACHADO e dar um ataque pesado.", $this->king->performWeapon());
    }

    public function testReturnFightQueenSuccess(): void
    {
        $this->assertEquals("Eu sou QUEEN, sou agil e inteligente.", $this->queen->fight());
        $this->assertEquals("Mira o ARCO e ATIRA.", $this->queen->performWeapon());

        $this->queen->setPerformWeapon(new KnifeBehavior());
        $this->assertEquals("Lança a KNIFE a Distancia.", $this->queen->performWeapon());
    }

    public function testReturnFightVikingSuccess(): void
    {
        $this->assertEquals("Sou VIKING, guerreiro forte e lento.", $this->viking->fight());
        $this->assertEquals("Levantar o MACHADO e dar um ataque pesado.", $this->viking->performWeapon());

        $this->viking->setPerformWeapon(new SwordBehavior());
        $this->assertEquals("A MOONLIGHT GREATSWORD está sendo usada para o ataque.", $this->viking->performWeapon());
    }

    public function testReturnFightThiefSuccess(): void
    {
        $this->assertEquals("Eu sou THIEF, ataco na sudina.", $this->thief->fight());
        $this->assertEquals("Lança a KNIFE a Distancia.", $this->thief->performWeapon());

        $this->thief->setPerformWeapon(new BowAndArrowBehavior());
        $this->assertEquals("Mira o ARCO e ATIRA.", $this->thief->performWeapon());
    }
}
