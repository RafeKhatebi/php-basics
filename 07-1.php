<?php
//PHP LOOPS 
//The php while loop.
$num = 1;
while ($num <= 5) {
    echo $num;
    $num++;
}
echo "\n ";
// 02 Also we can write like this.
$num2 = 5;
while ($num2 >= 1) {
    echo $num2;
    $num2--;
}

// 03 Another example of loop that print 10 20 30 40 until 100
$number = 0;
while ($number <= 100) {
    echo "The number is:  $number \n";
    $number += 20;
}

// the syntax of do-while 01 it'll print from 5 to 1
$x = 5;
do {
    echo $x;
    $x--;
} while ($x >= 1);
echo "\n";
// 02 it'll print 1 to 10
$y = 1;
do {
    echo $y;
    $y++;
} while ($y <= 10);
echo "\n";

// 03 the syntax of for loop
for ($i = 1; $i < 10; $i++) {
    echo $i;
}
echo "\n";
for ($i = 10; $i >= 1; $i--) {
    echo $i;
}
echo "\n";
for ($i = 0; $i <= 100; $i += 20) {
    echo $i;
}
echo "\n";


for ($i = 1; $i <= 5; $i++) {
    echo "* ";
    // for ($i = 1; $i <=5; $i++) {
    //     echo "*";
    // }
}
