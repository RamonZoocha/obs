<?php

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';

require "../vendor/crodas/haanga/lib/Haanga.php";
$config = array(
    'template_dir' => '../themes/default/templates',
    'cache_dir' => 'cache',
    'autoload' => TRUE,
    'compiler' => array(),
);
Haanga::configure($config);

use Obsidian\User;

$klein = new \Klein\Klein();

$klein->respond('GET', '/', function () {

    if(!User::is_logged_in())
        header('Location: /login');

});

/**
 * Loaded when the user accesses the /login page from the browser.
 */
$klein->respond('GET', '/login', function () {
    Haanga::Load('login.html', []);
});

/**
 * Loaded when the user submits the login form.
 */
$klein->respond('POST', '/login', function (\Klein\Request $request) {
    $username = $request->paramsPost()['username'];
    $password = $request->paramsPost()['password'];

    if(User::validate_login($username, $password)) {
        Haanga::Load('chat.html', []);
    }
});

$klein->dispatch();