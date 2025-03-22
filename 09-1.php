<?php
// PHP Global Variables --> Super Global
$a = 32;
$b = 43;
function mines(int $a, int $b)
{
    return $a - $b;
    //Output will be un defind.
}
function add()
{
    $GLOBAL['z'] = $GLOBALS['a'] + $GLOBALS['b'];
}
add();
$z;

var_dump($_SERVER);
