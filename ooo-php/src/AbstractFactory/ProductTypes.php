<?php

namespace App\AbstractFactory;

enum ProductTypes: string
{
    case CONTACT = 'contact';
    case APPT = 'appointment';
    case TTD = 'ttd';
}
