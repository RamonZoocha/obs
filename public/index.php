<?php

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';
require "../vendor/crodas/haanga/lib/Haanga.php";

session_start();

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
    else
        header('Location: /chat');
});

/**
 * Loaded when the user accesses the /login page from the browser.
 */
$klein->respond('GET', '/login', function () {
    Haanga::Load('login.html', []);
});

/**
 * Handles POST requests to url/login. Loaded when the user submits the login form.
 */
$klein->respond('POST', '/login', function (\Klein\Request $request) {
    $username = $request->paramsPost()['username'];
    $password = $request->paramsPost()['password'];

    $response = User::validate_login($username, $password);

    if($response['result'])
        header('Location: /chat');
    else
        Haanga::Load('login.html', ['message' => $response['message']]);
});

/**
 * Handles GET requests to /logout.
 */
$klein->respond('GET', '/logout', function () {
    unset($_SESSION['user']);
    header('Location: /login');
});

/**
 * Handles GET requests to url/chat.
 */
$klein->respond('GET', '/chat', function () {
    if(User::is_logged_in())
        Haanga::Load('chat.html', []);
    else
        header('Location: /logout');
});

/**
 * Handles GET requests to /register.
 */
$klein->respond('GET', '/register', function () {
    Haanga::Load('register.html', []);
});

/**
 * Handles POST requests to /register.
 */
$klein->respond('POST', '/register', function ($request) {

    $response = User::register_user(
        $request->paramsPost()['username'],
        $request->paramsPost()['password']
    );

    if($response['result']) {
        Haanga::Load('login.html', []);
    }

    else
        Haanga::Load('register.html', ['message' => $response['message']]);
});

$klein->respond('GET', '/t', function () {
   \Obsidian\Channel::remove_user_from_channel('c', 'general');
});

$klein->dispatch();