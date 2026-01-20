<?php

namespace App\Visitor;

class CDReferral implements Referral
{
    public function __construct(
        public string $cdTitle,
        public string $artistName,
        public float $price
    ) {}

    public function accept(Visitor $visitor)
    {
        $visitor->visit($this);
    }
}