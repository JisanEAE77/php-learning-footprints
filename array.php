<?php

$fruit_bucket = ["Apple", "Banana", "Orange"]; //This type of data is knowned as ARRAY and is wrapped inside a pair of square bracket seperating each variable with commas. In this type of variable you can store multiple data inside a single variable and can access them through their index position which starts from 0.

//we can access each element of the list using their serial no or index no. we just need to put the index number inside the square bracket and add it immediately after the variable name

echo "First fruit: $fruit_bucket[0] \n"; //here we used number 0 to grab the first item from the list. Yes, it's not an error, in programming index counting starts from zero.
echo "Second fruit: $fruit_bucket[1] \n";
echo "Third fruit: $fruit_bucket[2] \n";


//nested array (It means array inside an array)

$user_names = [
    ["Sadman Sakib", "Jisan"], // each nested array contains first name and last name of an user
    ["Raihan", "Chowdhury"],
    ["Ahmed", "Hussain"],
    ["Rifat", "Mahmud"] 
];

//so here is how we can access specific elements of a nested array.
//suppose I want to grab the last name of the first user

echo "Last name of the second user is: {$user_names[0][1]}"; //to grab nested array element we have to wrap it inside curly braces while embeding inside a string

//here the first user is positioned in index 0 of the array, so I grabbed the first user with $user_names[0]
//again the first element is an array itself so $user_names[0] is also an array
//now to grab the last name which is positioned in index 1 inside each nested array we just need to grab it with its own index number that is 1
//so we grab the last name of the first user like $user_names[0][1]
//in this way we can access any element of any depth of array using multiple index calling buy putting index number inside a square bracket in a proper sequence according to the sequence of the depth of the array



//Isn't it hard to remember the index position of datas? The answer is yes. So her is the solution.

$user_names = [
    ["first_name" => "Sadman Sakib", "last_name" => "Jisan"], // now here each element has its own key and value, so we can access the element with its key name instead of its index position
    ["first_name" => "Raihan", "last_name" => "Chowdhury"],
    ["first_name" => "Ahmed", "last_name" => "Hussain"],
    ["first_name" => "Rifat", "last_name" => "Mahmud"] 
];

//now grabbing the last name of the first user using the key "last_name"

echo "Last name of the second user is: {$user_names[0]["last_name"]}"; //so here we used the key name "last_name" to grab the last name of the first  user, as it is wrapped inside a curly braces we have to write the key name inside double or single quote

//so, here we learnt another interesting thing that if we want, we can store the elements in key value pair and the syntax will be like "key" => value