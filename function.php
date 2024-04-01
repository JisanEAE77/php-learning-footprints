<?php

$users = [
    ["first_name" => "Sadman Sakib", "last_name" => "Jisan", "age" => 23], // now here each element has its own key and value, so we can access the element with its key name instead of its index position
    ["first_name" => "Raihan", "last_name" => "Chowdhury", "age" => 22],
    ["first_name" => "Ahmed", "last_name" => "Hussain", "age" => 24],
    ["first_name" => "Rifat", "last_name" => "Mahmud", "age" => 25] 
];


function filterByAge($users, $start_age_range, $end_age_range) { //functions are dedicated code blocks that is made to perform specific task while called and reducing repeatative use of same codes, variables inside function parenthesis are called parameteres that needs to be passed as arguments while calling the function

    $filtered_users = [];

    foreach($users as $user){  //filtering the users in a range of age
        if($user["age"] >= $start_age_range AND $user["age"] <= $end_age_range) {
            $filtered_users[] = $user;
        }
    }

    return $filtered_users;
}


foreach(filterByAge($users, 21, 23) as $user){ //printing the user names those who are aged between 21 to 23 and filtered the user calling the filterByAge function passing the user list and the range of age according to which we need to filter the user
    
    echo "$user[first_name] $user[last_name] \n";
}