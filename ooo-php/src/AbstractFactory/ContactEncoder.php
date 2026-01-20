<?php

namespace App\AbstractFactory;

abstract class ContactEncoder
{
    public abstract function encode(): string;
}
