<?php

use Design\Classes\King;
use Design\Interfaces\KnifeBehavior;

require_once __DIR__ .'/vendor/autoload.php';

$p = new King();
echo $p->fight();
echo $p->performWeapon();
$p->setPerformWeapon(new KnifeBehavior());
echo $p->performWeapon();

