<?php

include 'vendor/autoload.php';

use App\Enums\ProductCategory;


$category = ProductCategory::audio;
var_dump($category->isLesiure());

echo PHP_EOL;

$category = ProductCategory::from(1);
echo "name: " . $category->name . PHP_EOL;
echo "value: " . $category->value . PHP_EOL;


$nullCategory = ProductCategory::tryFrom(100);
var_dump($nullCategory);

echo PHP_EOL;