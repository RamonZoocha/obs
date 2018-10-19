<?php

namespace Obsidian;

require_once '../vendor/autoload.php';
require_once '../src/autoload.php';
require "../vendor/crodas/haanga/lib/Haanga.php";
include_once '../plugins/core_user_permissions/core_user_permissions.php';

session_start();

//$config = array(
//    'template_dir' => '../themes/default/templates',
//    'cache_dir' => 'cache',
//    'autoload' => TRUE,
//    'compiler' => array(),
//);
//Haanga::configure($config);

$klein = new \Klein\Klein();
$plugin_manager = new \Obsidian\PluginManager();

$klein->respond('GET', '/', function () {
  global $plugin_manager;
  $plugin_manager->attach(new core_user_permissions());
  $plugin_manager->setEvent(['page' => 'front', 'hook' => 'page_load']);
});

$klein->dispatch();