<?php

namespace App\AbstractFactory;

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "BloggsCal Appointment";
    }
}
