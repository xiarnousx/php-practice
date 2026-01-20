<?php 

namespace App\Visitor;

use App\Visitor\Visitor;

interface Referral
{
    public function accept(Visitor $visitor);
}