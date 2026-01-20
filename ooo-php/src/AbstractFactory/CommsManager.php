<?php

namespace App\AbstractFactory;

abstract class CommsManager
{
    public abstract function getHeaderText(): string;
    public abstract function getFooterText(): string;
    public abstract function getApptEncoder(): ApptEncoder;
    public abstract function getContactEncoder(): ContactEncoder;
    public abstract function getTtdEncoder(): TtdEncoder;
}