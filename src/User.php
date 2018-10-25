<?php

namespace Obsidian;

class User {

  public static function isUserLoggedIn() {
    return false;
  }

  public static function redirect($page) {
    header('Location: /' . $page);
  }

}