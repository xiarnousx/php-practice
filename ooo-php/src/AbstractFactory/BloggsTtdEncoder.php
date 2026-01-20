<?php

namespace App\AbstractFactory;

class BloggsTtdEncoder extends TtdEncoder
{
    public function encode(): string
    {
        return "BloggsCal TTD";
    }
}