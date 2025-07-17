<?php

require 'vendor/autoload.php';

use Symfony\Component\ExpressionLanguage\ExpressionLanguage;


$exp = new ExpressionLanguage();

$exp->register("ceil", function($val) { // compiler
    return is_numeric($val) ? ceil($val) : 0;
}, function($args, $val): float { // evaluator
    return is_numeric($val) ? ceil($val) : 0;
});
class UnifaiProduct 
{
    public function __construct(
        public readonly float $price,
        public readonly int $transactions,
        public readonly float $cloudOverhead,
    ){}
}
$product = new UnifaiProduct(2.5, 200, 1);
$type = "unifai";

var_dump($exp->evaluate("ceil($type.price)*$type.transactions*$type.cloudOverhead", [
    $type => $product,
]));

var_dump($exp->evaluate("price*transactions+cloud_overhead",[
    'price' => $product->price,
    'transactions' => $product->transactions,
    'cloud_overhead' => $product->cloudOverhead,
]));

$x = 100_000_000;
echo $x;
echo "\n";