<?php

namespace App\Visitor;

use App\Visitor\Visitor;
use App\Visitor\CDReferral;

class DiscountVisitor implements Visitor
{
    public function visit(CDReferral $cdReferral)
    {
        // Apply a 10% discount to the CD referral price
        $discountedPrice = $cdReferral->price * 0.9;
        echo "Discounted Price for " . $cdReferral->cdTitle . " by " . $cdReferral->artistName . " is $" . number_format($discountedPrice, 2) . "\n";
    }

    // You can add more visit methods for other Referral types here
}