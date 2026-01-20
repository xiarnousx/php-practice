<?php

namespace App\Enums;

enum ProductCategory: int
{
    case household = 1;
    case clothing = 2;
    case reading = 3;
    case audio = 4;
    case grocery = 5;

    public function isLesiure():bool {
        return match($this) {
            self::reading, self::audio => true,
            default => false,
        };
    }
}