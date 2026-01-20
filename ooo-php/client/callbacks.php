<?php

include 'vendor/autoload.php';

use App\Callbacks\ProcessSaleV1;
use App\Callbacks\Product;
use App\Callbacks\Totalizer;
use App\Callbacks\TotalizerV1;
use App\Callbacks\TotalTracker;
use App\Callbacks\TotalizerV2;

$processor = new ProcessSaleV1();

$processor->registerCallback(function(Product $product) {
    echo "Logging sale of {$product->name}\n";
});

$processor->sale(new Product("Laptop", 1200));
print "\n";
$processor->sale(new Product("Smartphone", 800));

class Mailer 
{
    public function doMail(Product $product): void
    {
        print " mailing ({$product->name})\n";
    }
}

// notice the array tuple for Mailer and 'doMail' it is possible becuse
// registerCallback argument is callable
$processor->registerCallback([new Mailer(), 'doMail']);
$processor->sale(new Product("shoes", 6));

// notice we are passing callback that returns from static method
$processor->registerCallback(Totalizer::warnAmount());
$processor->registerCallback(TotalTracker::warnAmount(20));
$processor->registerCallback((new TotalizerV1())->warnAmount(30));
$processor->registerCallback(new TotalizerV2()->warnAmount(100));
$processor->sale(new Product("flipflop", 10));
$processor->sale(new Product("book", 15));
$processor->sale(new Product("notebook", 6));

print "\n PHP 8 Feature\n";
$processor->sale(new Product("running shoes", 120));

print "\n";