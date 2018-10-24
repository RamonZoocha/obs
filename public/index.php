<?php

namespace Obsidian;

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';
require "../vendor/crodas/haanga/lib/Haanga.php";

session_start();

$klein = new \Klein\Klein();
$plugin_manager = new \Obsidian\PluginManager();

/**
 * Handle requests to the home page, site.com/.
 */
$klein->respond('GET', '/', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['page' => 'front', 'hook' => 'page_load']);
});

/**
 * Handle requests to the login page: site.com/login.
 */
$klein->respond('GET', '/login', function () {
  global $plugin_manager;
  $plugin_manager->setEvent(['page' => 'login', 'hook' => 'page_load']);
});


$klein->respond('GET', '/x', function () {
  echo 'x';
});

$klein->dispatch();