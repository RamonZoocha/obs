<?php
/**
 * This class manages plugins. It can dispatch function calls to registered plugins, install and uninstall plugins, etc.
 * Simple and clean, there's no need for Observer pattern or crazy implementations.
 * The performance is still fine even though the plugin list is loaded on every request.
 */

namespace Obsidian;

class PluginManager{

  protected $plugins = array();

  protected $event = array();

  public function setEvent($event) {
    $this->event = $event;
    $this->notify();
  }

  public function attach($plugin) {
    array_push($this->plugins, $plugin);
  }

  public function detach($plugin) {
  }

  public function notify() {
    foreach ($this->plugins as $plugin) {
      $plugin->{$this->event['hook']}($this->event);
    }
  }
}