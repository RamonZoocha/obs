<?php

namespace Obsidian;

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';
require "../vendor/crodas/haanga/lib/Haanga.php";

session_start();

$klein = new \Klein\Klein();
$plugin_manager = new \Obsidian\PluginManager();

$klein->respond('GET', '/', function () {
  global $result;
  global $plugin_manager;
  $plugin_manager->detach('a');
  $plugin_manager->attach('core_chat');
  $plugin_manager->attach('core_user_permissions');
  $plugin_manager->setEvent(['page' => 'front', 'hook' => 'page_load']);
});


$klein->respond('GET', '/login', function () {
  echo 'login';
});


$klein->respond('GET', '/x', function () {
  echo 'x';
});

$klein->dispatch();