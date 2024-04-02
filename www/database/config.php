<?php

// edit your database configuration here

$dbconfig = [
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "webdb",
];

// edit your database user credentials here

$dbuser = [
    "user" => "root",
    "pass" => "",
];

$config = [
    "dbconfig" => $dbconfig, 
    "dbuser" => $dbuser
];

return $config;