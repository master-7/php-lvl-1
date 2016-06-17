<?php
function addOne(&$a, &$b, &$c)
{
    $a++;
    $b++;
    $c++;
}

$num1 = 1;
$num2 = 2;
$num3 = 3;

addOne($num1, $num2, $num3);

var_dump($num1, $num2, $num3);