<?php

namespace App\Callbacks;

class TotalizerV2
{
    private float $total = 0;
    private float $amount = 0;

    public function warnAmount(float|int $amount): callable
    {
        $this->amount - $amount;
        // PHP 8
        return $this->processPrice(...);
    }

    private function processPrice(Product $product)
    {
        $this->total += $product->price;
        print " Total: {$this->total}\n";
        if ($this->total > $this->amount) {
            print " Totalizerv2 high price reached: {$this->total}\n";
        }
    }
}