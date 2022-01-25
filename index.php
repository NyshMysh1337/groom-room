<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        require __DIR__ . '/public/index.php';
        break;
    case '':
        require __DIR__ . '/public/index.php';
        break;
    case '/form':
        require __DIR__ . '/public/form.php';
        break;
    case '/registration':
        require __DIR__ . '/public/registration.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/public/404.php';
        break;
}
?>