<?php

namespace App\Callbacks;

class TotalizerV1
{
    private float $total = 0;
    private float $amount = 0;

    public function warnAmount(float|int $amount): callable
    {
        $this->amount - $amount;
        // PHP 7.1
        return \Closure::fromCallable([$this, 'processPrice']);
    }

    private function processPrice(Product $product)
    {
        $this->total += $product->price;
        print " Total: {$this->total}\n";
        if ($this->total > $this->amount) {
            print " Totalizerv1 high price reached: {$this->total}\n";
        }
    }
}