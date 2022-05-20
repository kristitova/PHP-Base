<?php
function add(float $a, float $b): float
{
    return $a + $b;
}

function minus(float $a, float $b): float
{
    return $a - $b;
}

function mult(float $a, float $b): float
{
    return $a * $b;
}

function div(float $a, float $b): ?float
{
    return ($b == 0) ? null : $a / $b;
}
