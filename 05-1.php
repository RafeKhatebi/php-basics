<?php
//PHP Complete Arrays: like 03.php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[1] . "," . $cars[0] . " and" . $cars[2] . "\n \n";

// Another example of an array!
$age = array("Ali" => "32 ", "Karim" => "43 ", "Jamil" => "90 ");
echo "Karim is " . $age["Karim"] . "years old. \n \n";

// PHP array in array Dimensional
$students = array(
    array("Ali", 4102, "software"),
    array("jamil", 3202, "software"),
    array("kamil", 4302, "software"),
);
echo $students[0][0] . "'s id is" . $students[0][1] . "and he is in" . $students[0][2] . "department. \n";
echo count($students);
