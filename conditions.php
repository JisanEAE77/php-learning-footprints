<?php

$execute = true;

if($execute) { //if the variable or final result of the expression inside if condition block is true then all the codes inside the if block will execute
    echo "This block will execute!";
}

$is_it_raining = false;

if($is_it_raining) { //this block will execute if and only if the expression inside if condition is true
    echo "I won't go to school as it is raining outside!";
} else { //this block will execute if and only if the expression inside if condition is false
    echo "Though it's not raining outside, but still I won't go to school, LOL.";
}


$age = 18;

if($age < 12) { //this block will execute if and only if the expression inside if condition is true
    echo "You are a little baby. XD";
} elseif ($age >= 13 AND $age <= 19) { //this block will execute if and only if the expression inside this elseif condition is true and expressions of all the previous if and elseif blocks are false
    echo "You are a teen and most probably sweet sixteen. HAHA";
} elseif ($age >=20 AND $age <=32) { //this block will execute if and only if the expression inside this elseif condition is true and expressions of all the previous if and elseif blocks are false
    echo "You are adult now, don't act like an immature";
} else { //this block will execute if and only if the expressions inside all of the previous if and elseif conditions are false
    echo "You are old as hell. Just joking, hell is not that old as you. LOL";
}


// ternary operator

echo ($age < 18) ? "Ohho! Kiddo...." : "Hello, big brooo...."; // terinary operator checks a expression and if its true then the part after ? sign will be executed else the part after : will be executed

