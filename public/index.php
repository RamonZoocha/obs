<?php

namespace Obsidian;

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';

session_start();

$klein = new \Klein\Klein();
$plugin_manager = new \Obsidian\Plugin();

/**
 * Handle requests to the home page, site.com/.
 */
$klein->respond('GET', '/', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
});

/**
 * Handle requests to the login page: site.com/login.
 */
$klein->respond('GET', '/login', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['hook' => 'page_load', 'uri' => $_SERVER['REQUEST_URI']]);
});


$klein->respond('GET', '/x', function () {
  echo 'x';
});

$klein->dispatch();