<?php

namespace App\AbstractFactory;

class BloggsContactEncoderV2 implements Encoder
{
    public function encode(): string
    {
        return "BloggsCal V2 contact data";
    }
}