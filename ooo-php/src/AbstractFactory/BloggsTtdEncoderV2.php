<?php

namespace App\AbstractFactory;

class BloggsTtdEncoderV2 implements Encoder
{
    public function encode(): string
    {
        return "BloggsCal V2 TTD data";
    }
}