

<?php

//in this file we will only write php codes that is necessary for the html page or the view template

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

$filtered_users = filterByAge($users, 21, 23);

