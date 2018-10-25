<?php

namespace Obsidian;

define('CONFIG_FILE_PATH', '/config/config.json');

class Config {

  public static function getConfig($key) {
    $config_file_path = dirname(__DIR__) . CONFIG_FILE_PATH;
    return  json_decode(file_get_contents($config_file_path))->$key;
  }

}