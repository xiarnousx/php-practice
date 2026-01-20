<?php

namespace App\Decorator;

class DiamondDecorator extends TileDecorator
{
    private int $additionalWealthFactor = 5;

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() + $this->additionalWealthFactor;
    }
}