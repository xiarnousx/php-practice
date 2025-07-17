<?php

$temp = "[+\-*\/]";

$valid_expression = "{price_ru}*{price_transaction}+{cloud_overhead}";

// $exp = "/(?<=[^+\-*\/])(?P<operands>{(?:[a-z_]+)})+(?P<ops>[+\-*\/])?(?=[^+\-*\/])/";

// $sub = "/(?=^(?!\s*[+\-*\/]).*(?<![+\-*\/]\s*)$)/";

// $prog_exp = "/(?<!^[+\-*\/])\{(?P<operands>[a-z_]+)\}+(?P<ops>[+\-*\/])?/i";
// $prog_exp = "/(?!^[^{])(?:\G{(?P<operands>[a-z_]+)\}(?P<ops>(\*|\+|\-|\/))?)+(?!^[^}])/i";
$prog_exp = "/(?!^[^{])(?:\G{(?P<operands>[a-z_]+)\}(?P<ops>(\*|\+|\-|\/))?)+/i";

$matches = [];

$is_valid = preg_match_all($prog_exp, $valid_expression, $matches);

echo "is valid: " . ($is_valid ? "yes" :"no") . "\n";


if ($is_valid) {
    print_r($matches['operands']);
    print_r($matches['ops']);
}


