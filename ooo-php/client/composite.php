<?php

include 'vendor/autoload.php';

use App\Composite\Army;
use App\Composite\Archer;
use App\Composite\LaserCannon;

$mainArmy = new Army();
$mainArmy->addUnit(new Archer());
$mainArmy->addUnit(new LaserCannon());

$subArmy = new Army();
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new Archer());
$mainArmy->addUnit($subArmy);

print "Total Bombard Strength: " . $mainArmy->bombardStrength() . "\n";