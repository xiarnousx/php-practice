<?php

namespace App\AbstractFactory;

class BloggsContactEncoder extends ContactEncoder
{
    public function encode(): string
    {
        return "BloggsCal Contact";
    }
}
