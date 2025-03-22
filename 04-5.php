<?php
//PHP Conditional Statement.
$num = 0;
if ($num <= 10 && $num >= 1) {
    echo "The number is smaller than 10 \n";
} elseif ($num >= 20) {

    echo "The number is bigger than 20 \n";
} else {
    echo "The number is equal to 0 \n";
}
//The PHP switch statement
$day  = "saturday";
switch ($day) {
    case "saturday":
        echo "Today is saturday";
        break;
    case "sunday":
        echo "Today is sunday";
        break;
    case "monday":
        echo "Today is Monday";
        break;
    case "tuesday";
        echo "Today is Tuesday";
        break;
    case "wednesday";
        echo "Today is wednesday";
        break;
    default:
        echo "Today is holiday please message on weekdays.";
}
?>