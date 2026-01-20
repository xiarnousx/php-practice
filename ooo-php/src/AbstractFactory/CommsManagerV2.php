<?php

namespace App\AbstractFactory;

abstract class CommsManagerV2
{
    abstract public function getHeaderText(): string;
    abstract public function getFooterText(): string;
    abstract public function make(ProductTypes $type):Encoder;
}