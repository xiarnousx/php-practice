<?php

namespace App\AbstractFactory;

class BloggsCommsManager extends CommsManagerV2
{
    public function getHeaderText(): string
    {
        return "BloggsCal Header";
    }

    public function getFooterText(): string
    {
        return "BloggsCal Footer";
    }

    public function make(ProductTypes $type): Encoder
    {
        return match ($type) {
            ProductTypes::APPT => new BloggsApptEncoderV2(),
            ProductTypes::CONTACT => new BloggsContactEncoderV2(),
            ProductTypes::TTD => new BloggsTtdEncoderV2(),
        };
    }
}