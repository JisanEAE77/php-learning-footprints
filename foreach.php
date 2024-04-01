<?php

$fruit_bucket = ["Apple", "Banana", "Orange"]; //This type of data is knowned as ARRAY and is wrapped inside a pair of square bracket seperating each variable with commas. In this type of variable you can store multiple data inside a single variable and can access them through their index position which starts from 0.


// loop throug this array

foreach ($fruit_bucket as $fruit) { //foreach is looping keyword use to loop through objcts like ARRAY
    echo $fruit . "\n"; //here \n has been used to print each fruit in new line, as it is a command to move the cursor to the next line.
}

$user_names = [
    ["Sadman Sakib", "Jisan"], //each nested array contains first name and last name of an user
    ["Raihan", "Chowdhury"],
    ["Ahmed", "Hussain"],
    ["Rifat", "Mahmud"]
];

foreach ($user_names as $user) {
    echo "$user[0] $user[1] \n"; //printing each users' first name and last name in a single line 
}

$user_names = [
    ["first_name" => "Sadman Sakib", "last_name" => "Jisan"], // now here each element has its own key and value, so we can access the element with its key name instead of its index position
    ["first_name" => "Raihan", "last_name" => "Chowdhury"],
    ["first_name" => "Ahmed", "last_name" => "Hussain"],
    ["first_name" => "Rifat", "last_name" => "Mahmud"]
];

foreach ($user_names as $user) {
    echo "$user[first_name] $user[last_name] \n"; //printing each users' first name and last name in a single line grabbing the data from the array using their key names
    //here we're not grabbing the element in a nested way and thats why didn't wrap the variable inside a curly braces. who while normally using the varialbe without curly braces we don't have to put the key name inside a double quotation like we did in array lesson while placing the variable inside a curly braces and placed the key name inside double quotation
}
