<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    case '/contact' :
        require __DIR__ . '/views/contact.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}

?>