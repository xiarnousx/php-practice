<?php

namespace App\Visitor;

use App\Visitor\Visitor;
use App\Visitor\CDReferral;

class LoggerVisitor implements Visitor
{
    public function visit(CDReferral $cdReferral)
    {
        // Log CD referral details
        echo "Logging CD Referral: " . $cdReferral->cdTitle . " by " . $cdReferral->artistName . " priced at $" . $cdReferral->price . "\n";
    }

    // You can add more visit methods for other Referral types here
}
