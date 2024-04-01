<?php

$first_name = "Sadman Sakib";
$last_name = "Jisan";

echo "My name is $first_name $last_name"; //we can normally embed variable inside normal string like this
echo "My name is" . " " . $first_name . " " . $last_name; // we can also use (.) operator to concatenate strings
echo "My name is {$first_name}1"; //if you want to add any character immediately after the variable name then you cant do it normally inside a double quoted string. but if you want to do then you have to  wrap the variable inside a pair of curly braces as I used the number 1 immediately after the variable name