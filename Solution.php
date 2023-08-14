<?php
function mergeArrays(array $a, array $b): array
{
    $merged = array_merge($a, $b);
    sort($merged);
    return $merged;
}

$a = [1,2,3];
$b = [2,5,5];
$result = mergeArrays($a, $b);
print_r($result);