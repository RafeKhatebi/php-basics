<?php

function addNumbers(int $num1, int $num2)
{
    echo "The total is equal to : " . $num1 + $num2;
}
//The out put wil be 15 because php is  loosely type.
addNumbers(12, "3 ");
echo "\n";
//PHP default argument.
function name(string $name1 = "Ali")
{
    echo "My name is " . $name1;
}
name("Ali \n");
name("Ajmal");

function  sum(float $num1, float $num2): float
{
    return (int) $num1 + $num2;
}
echo "c\n The total of float numbers are : " . sum(32.3, 43.34);
