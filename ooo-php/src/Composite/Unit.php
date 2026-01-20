<?php

namespace App\Composite;

abstract class Unit
{
    abstract public function bombardStrength(): int;
    
    public function addUnit(Unit $unit): void
    {
        throw new \Exception("Cannot add unit to leaf");
    }

    public function removeUnit(Unit $unit): void
    {
        throw new \Exception("Cannot remove unit from leaf");
    }
}