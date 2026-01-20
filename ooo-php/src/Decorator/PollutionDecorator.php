<?php

namespace App\Decorator;

class PollutionDecorator extends TileDecorator
{
    private int $wealthFactorPenalty = 3;

    public function getWealthFactor(): int
    {
        return $this->tile->getWealthFactor() - $this->wealthFactorPenalty;
    }
}