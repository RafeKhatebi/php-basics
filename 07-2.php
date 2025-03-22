<?php
// Loop the syntax of foreach loop.
$names = array("Ali", "karim", "jamil");
foreach ($names as $values) {
    echo $names;
}
echo "\n";
$class = array("one" => "1", "two" => "2", "three" => "3");
foreach ($class as $value) {
    echo "$key => $value";
}
echo "\n";
// The break keyword in loop in php.
for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i;
}
// The continue keyword in loop in php.

echo "\n";
for ($i = 1; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i;
}
