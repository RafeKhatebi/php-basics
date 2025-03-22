<?php
// 01 Calculate the whole of odd numbers and even numbers.
$sumEven = 0;
$sumOdd = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $sumEven += $i;
    } else {
        $sumOdd += $i;
    }
}
echo "Sum of even numbers: $sumEven \n";
echo "Sum of odd numbers: $sumOdd \n";
echo "\n";
// 02 Reverse a string in php.
function reverseString($str)
{
    $reversed = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];
    }
    return $reversed;
}
echo reverseString('hello');
echo "\n";

// 03 print a start triangle
$height = 5;
for ($i = 1; $i <= $height; $i++) {
    echo str_repeat('  ', $height - $i);
    echo str_repeat('*', 2 * $i - 1);
    echo ("\n");
}
echo "\n";

// 04 a loop for factorial.

function factorial($n): int
{
    $result  = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
echo factorial(5); // The output will be 120 5! = 5*4*3*2*1 => 120

echo factorial(10);  // output will be 1203628800
echo "\n";
// 05  times table print 
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i * $j = " . ($i * $j) . "\t";
    }
    echo "\n";
}
