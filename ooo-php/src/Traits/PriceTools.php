<?php

namespace App\Traits;

trait PriceTools
{
   public function calculateTax(float $amount, float $taxRate): float
   {
        return $amount * ($taxRate / 100);
   }
}
