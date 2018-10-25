<?php

namespace Obsidian;

class User {

  public static function isUserLoggedIn() {
    return true;
  }

  public static function getCurrentUser() {
    return $_SESSION['user'];
  }

  public static function redirect($page) {
    header('Location: /' . $page);
  }

  public static function login($username, $password) {
    return true;
  }

}