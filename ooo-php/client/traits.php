<?php

include 'vendor/autoload.php';
use App\Traits\TaxTools;
use App\Traits\PriceTools;

class Test 
{
    use TaxTools;
    use PriceTools {
        PriceTools::calculateTax insteadof TaxTools;
        // incidentally you can also use method name aliase for example to implement abstract method or an interface
        TaxTools::calculateTax as calculateTaxFromTrait;
    }

    public function __toString(): string
    {
        $amount = 100;
        $taxRate = 15;

        $tax = $this->calculateTax($amount, $taxRate);
        return "Calculated tax on $amount at rate $taxRate% is: $tax";
    }
} 

var_dump((new Test()) ."");