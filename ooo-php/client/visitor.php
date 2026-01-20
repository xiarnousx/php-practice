<?php
include 'vendor/autoload.php';

use App\Visitor\CDReferral;
use App\Visitor\LoggerVisitor;
use App\Visitor\DiscountVisitor;


$cd = new CDReferral("The Dark Side of the Moon", "Pink Floyd", 12.99);

$logger = new LoggerVisitor();
$discountVisitor = new DiscountVisitor();

$cd->accept($logger);
$cd->accept($discountVisitor);
