<?php

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';

use Obsidian\User;

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {

    if(!User::is_logged_in())
        header('Location: /login');

});

$klein->respond('GET', '/login', function () {

    if(User::is_logged_in())
        header('Location: /chat');
});

$klein->respond('GET', '/chat', function () {
    echo 'chat';
});

$klein->dispatch();