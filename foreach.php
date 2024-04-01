<?php

$fruit_bucket = ["Apple", "Banana", "Orange"]; //This type of data is knowned as ARRAY and is wrapped inside a pair of square bracket seperating each variable with commas. In this type of variable you can store multiple data inside a single variable and can access them through their index position which starts from 0.


// loop throug this array

foreach ($fruit_bucket as $fruit) { //foreach is looping keyword use to loop through objcts like ARRAY
    echo $fruit."\n"; //here \n has been used to print each fruit in new line, as it is a command to move the cursor to the next line.
}