<?php

namespace App\Traits;

trait TaxTools
{
    public function calculateTax(float $amount, float $taxRate): float
    {
        return $amount * ($taxRate / 100);
    }
}