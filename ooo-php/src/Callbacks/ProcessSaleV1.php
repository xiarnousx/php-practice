<?php

namespace App\Callbacks;

class ProcessSaleV1
{
    private array $callbacks =[];

    public function registerCallback(callable $callback): void
    {
        $this->callbacks[] = $callback;
    }

    public function sale(Product $product): void
    {
        echo "Processing sale for product: {$product->name} at \${$product->price}\n";

        foreach ($this->callbacks as $callback) {
            $callback($product);
            // call_user_func($callback, $product);
        }
    }
}