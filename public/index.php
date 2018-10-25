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
$klein->respond('POST', '/login', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

/**
 * Handle GET requests to  site.com/chat.
 */
$klein->respond('GET', '/chat', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'chat_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

$klein->dispatch();