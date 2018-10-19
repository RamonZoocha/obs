<?php

abstract class  PluginTemplate {

  public $priority = 0;
  public $name = 0;

  public function __construct($name, $priority) {
    $this->name = $name;
    $this->priority = $priority;
  }

}