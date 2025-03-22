<?php
$letters1 = array("a " => " A", "b" => "B");
$letters2 = array("b" => "B", "a " => " A");
var_dump($letters1 == $letters2 ."\n"); // Output is false
var_dump($letters1 === $letters2 ."\n"); // Output is false
var_dump($letters1 != $letters2  ."\n"); // Output is true
var_dump($letters1 <> $letters2  ."\n"); // Output is true
var_dump($letters1 !== $letters2  ."\n"); // Output is true

