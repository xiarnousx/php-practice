<?php

include 'vendor/autoload.php';

use App\Decorator\Plain;
use App\Decorator\Tile;
use App\Decorator\TileDecorator;
use App\Decorator\DiamondDecorator;
use App\Decorator\PollutionDecorator;

$tile = new Plain();
echo "Base wealth factor: " . $tile->getWealthFactor() . "\n";

$tileWithDiamond = new DiamondDecorator($tile);
echo "Wealth factor with diamond: " . $tileWithDiamond->getWealthFactor() . "\n";

$tileWithPollution = new PollutionDecorator($tileWithDiamond);
echo "Wealth factor with diamond and pollution: " . $tileWithPollution->getWealthFactor() . "\n";