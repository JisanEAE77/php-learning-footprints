<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/www" => "controller/index.php",
    "/www/about" => "controller/about.php",
    "/www/contact" => "controller/contact.php" 
];

if(array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    require $routes['/www'];
}