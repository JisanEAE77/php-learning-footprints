<?php

function checkCurrentPage($dir) {
    
    if (parse_url($_SERVER["REQUEST_URI"])["path"] === $dir) {
        return "bg-gray-900 text-white";
    } else {
        return "text-gray-300 hover:bg-gray-700 hover:text-white";
    }
} 


