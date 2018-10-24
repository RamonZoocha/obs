<?php
/**
 * This class manages plugins. It can dispatch function calls to registered plugins, install and uninstall plugins, etc.
 * Simple and clean, there's no need for Observer pattern or crazy implementations.
 * The performance is still fine even though the plugin list is loaded on every request.
 */

namespace Obsidian;

class PluginManager{

  public static $manager;

  protected $plugins = array();

  protected $event = array();

  public function setEvent($event) {
    $this->event = $event;
    $this->loadPlugins();
    $this->notify();
  }

  public function attach($plugin_name) {

    $plugin_name = "\\Obsidian\\" . $plugin_name;
    $plugin = new $plugin_name;

    echo 'Attached: <br><br>';
    print_r($plugin);
    echo '<hr>';

    array_push($this->plugins, $plugin);

    echo 'Plugins attached: <br><br>';
    print_r($this->plugins);
    echo '<hr>';
  }

  public function notify() {

    echo 'Notify: <br><br>';
    print_r($this->event);
    echo '<hr>';

    foreach ($this->plugins as $plugin) {
      $plugin->{$this->event['hook']}($this->event);
    }
  }

  public function loadPlugins() {

    $config_file_path = dirname(__DIR__) . '/config/config.json';
    $plugins_enabled = json_decode(file_get_contents($config_file_path))
      ->plugins_enabled;

    foreach ($plugins_enabled as $plugin) {
      include_once '../plugins/' . $plugin->name .'/' . $plugin->name .'.php';
      $this->attach($plugin->name);
    }
  }

}