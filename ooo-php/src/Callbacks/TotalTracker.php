<?php

namespace App\Callbacks;

class TotalTracker
{
    public static function warnAmount($amt): callable
    {
        $total = 0;
        return function(Product $product) use($amt, &$total) {
            $total += $product->price;
            print " total: $total\n";
            if ($total > $amt) {
                print " High price reached: ${total}\n";
            }
        };
    }
}