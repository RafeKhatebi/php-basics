<?php
// Some Functions about array

// 01 To count how many elements are in an array.
$names = array("Ali", "Mo", "Jami");
echo count($names);

// 02 To check an element is in an array or no ?
var_dump(in_array("Ali", $names));

// 03 To check is the wanted key  in array or no ? 
$letters1 = array("01" => " A", "02" => "B");
var_dump(array_keys($letters1));
var_dump(array_key_exists("01", $letters1));
var_dump(array_key_exists("03", $letters1));


// 04 To reverse an array use this function.
var_dump(array_reverse($letters1));

// 05 To slice an array 
var_dump(array_slice($letters1, 2));
// 05 To slice an array  with its length.
var_dump(array_slice($letters1, 2, 2));
$studentNames = array("Ali", "Ebad", "Jamal", "Kamal", "Kabir", "Rahim", "Nabi");
//it will print from Kabir not Ali and print just Kabir and Rahim because of the length.
var_dump(array_slice($studentNames, 4, 2));
