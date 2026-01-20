<?php

namespace App\FactoryMethod;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return 'Bloggs Header';
    }

    public function getApptEncoder(): ApptEncoder
    {
        return new BlogsApptEncoder();
    }

    public function getFooterText(): string
    {
        return 'Bloggs Footer';
    }
}
