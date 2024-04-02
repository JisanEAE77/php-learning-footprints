<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/www" => "controller/index.php",
    "/www/about" => "controller/about.php",
    "/www/contact" => "controller/contact.php",
    "/www/404" => "controller/404.php"
 ];

$path = $routes["/www/404"];

if(array_key_exists($uri, $routes)) {
    $path = $routes[$uri];
} else {
    http_response_code(404);
}
