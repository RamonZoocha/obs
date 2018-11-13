<?php

namespace Obsidian;

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';

session_start();

$klein = new \Klein\Klein();
$plugin_manager = new \Obsidian\Plugin();

/**
 * Handle GET requests to the home page.
 */
$klein->respond('GET', '/', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

/**
 * Handle GET requests to site.com/login.
 */
$klein->respond('GET', '/login', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

/**
 * Handle POST requests to site.com/login.
 */
$klein->respond('POST', '/login', function ($request) {
  global $plugin_manager;

  $username = $request->paramsPost()->all()['username'];
  $password = $request->paramsPost()->all()['password'];
  $password = md5($password);

  $success = false;

  $plugin_manager->setEvent([
    'hook' => 'login_attempt_before',
    'uri' => $_SERVER['REQUEST_URI'],
    'vars' => [
      'params' => $request->paramsPost()->all(),
      'success' => $success,
    ],
  ]);

  $success = User::login($username, $password);

  $plugin_manager->setEvent([
    'hook' => 'login_attempt_after',
    'uri' => $_SERVER['REQUEST_URI'],
    'vars' => [
      'params' => $request->paramsPost()->all(),
      'success' => $success,
    ],
  ]);

});

/**
 * Handle GET requests to  site.com/chat.
 */
$klein->respond('GET', '/chat', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
  $plugin_manager->setEvent(['hook' => 'chat_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

/**
 * Handle GET requests to the register page.
 */
$klein->respond('GET', '/register', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

/**
 * Handle POST requests to /register.
 */
$klein->respond('POST', '/register', function ($request) {
  global $plugin_manager;

  $params = $request->paramsPost()->all();
  $success = false;

  $plugin_manager->setEvent([
    'hook' => 'register_attempt_before',
    'uri' => $_SERVER['REQUEST_URI'],
    'vars' => [
      'params' => $params,
      'success' => json_encode($success),
    ],
  ]);

  $success = User::register($params);

  $plugin_manager->setEvent([
    'hook' => 'register_attempt_after',
    'uri' => $_SERVER['REQUEST_URI'],
    'vars' => [
      'params' => $params,
      'success' => $success,
    ],
  ]);


});

/**
 * Handle GET requests to logoug
 */
$klein->respond('GET', '/logout', function () {
  global $plugin_manager;
  User::logout();
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
  $plugin_manager->setEvent(['hook' => 'user_loged_out', 'uri' => $_SERVER['REQUEST_URI']]);
});

$klein->respond('GET', '/test', function () {
  Template::render('main', []);
});

$klein->dispatch();