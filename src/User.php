<?php

namespace Obsidian;

class User {

  public static function isUserLoggedIn() {
    return true;
  }

  public static function redirect($page) {
    header('Location: /' . $page);
  }

}