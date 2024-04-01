<?php

$fruit_bucket = ["Apple", "Banana", "Orange"]; //This type of data is knowned as ARRAY and is wrapped inside a pair of square bracket seperating each variable with commas. In this type of variable you can store multiple data inside a single variable and can access them through their index position which starts from 0.

//we can access each element of the list using their serial no or index no. we just need to put the index number inside the square bracket and add it immediately after the variable name

echo "First fruit: $fruit_bucket[0] \n"; //here we used number 0 to grab the first item from the list. Yes, it's not an error, in programming index counting starts from zero.
echo "Second fruit: $fruit_bucket[1] \n";
echo "Third fruit: $fruit_bucket[2] \n";