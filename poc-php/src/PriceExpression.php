<?php

class PriceExpression
{
    private $regex = "/(?P<operands>{(?:[a-z_]+)})+(?P<ops>[+\-*\/])?/si";
    private string $expr;

    public function __construct(string $expr)
    {
        $curated = trim($expr, " \n\t\v\0+-*/");
        $this->expr = $expr;
    }

    public function parse()
    {
        $matches = [];
        $isValid = preg_match_all($this->regex, $this->expr, $matches);
        if (!$isValid) {
            return ['success' => false, 'data' => ['error' => "invalid expression"]];
        }

        $operands = $matches['operands'];
        $operators = $matches['ops'];
        $stack = [];
        for ($i = 0; $i<count($operands); $i++) {
            
        }
    }
}