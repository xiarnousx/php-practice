<?php

namespace App\Composite;

class Army extends Unit
{
    /**
     * @var Unit[]
     */
    private array $units = [];

    public function addUnit(Unit $unit): void
    {
        $this->units[] = $unit;
    }

    public function removeUnit(Unit $unit): void
    {
        $this->units = array_filter($this->units, fn($u) => $u !== $unit);
    }

    public function bombardStrength(): int
    {
        $strength = 0;
        foreach ($this->units as $unit) {
            $strength += $unit->bombardStrength();
        }
        return $strength;
    }
}