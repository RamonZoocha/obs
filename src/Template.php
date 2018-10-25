<?php

namespace Obsidian;

use Obsidian\Config;

require '../vendor/crodas/haanga/lib/Haanga.php';
$config = array(
  'template_dir' => '../themes/' . Config::getConfig( 'enabled_theme') . '/templates',
  'cache_dir' => '../public/cache',
  'autoload' => TRUE,
  'compiler' => array(),
);
\Haanga::configure($config);

class Template {

  public static function render($template_name, $vars) {
    \Haanga::Load($template_name . '.html', $vars);
  }
}