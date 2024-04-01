<?php

$users = [
    ["first_name" => "Sadman Sakib", "last_name" => "Jisan", "age" => 23], // now here each element has its own key and value, so we can access the element with its key name instead of its index position
    ["first_name" => "Raihan", "last_name" => "Chowdhury", "age" => 22],
    ["first_name" => "Ahmed", "last_name" => "Hussain", "age" => 24],
    ["first_name" => "Rifat", "last_name" => "Mahmud", "age" => 25] 
];

$filtered_users = array_filter($users, function($user) { //array_filter is a php built in function that helps us to filter any array with our provided conditions passed as a function.
    return $user["age"] < 24;
});

foreach($filtered_users as $user){ //printing the user names those who are aged less than 24 and filtered the user using php built in array_filter function
    
    echo "$user[first_name] $user[last_name] \n";
}