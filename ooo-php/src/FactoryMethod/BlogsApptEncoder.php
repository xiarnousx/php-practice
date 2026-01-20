<?php

namespace App\FactoryMethod;

class BlogsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return json_encode(['type' => 'blog']);
    }
}
