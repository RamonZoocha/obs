<?php

namespace Obsidian;

class User {

  public static function isUserLoggedIn() {
    return isset($_SESSION['user']);
  }

  public static function getCurrentUser() {
    return $_SESSION['user'];
  }

  public static function redirect($page) {
    header('Location: /' . $page);
  }

  public static function login($username, $password) {

    if(User::authenticate($username, $password)) {
      $_SESSION['user'] = Database::getUser($username);
      return true;
    }

    return false;
  }

  public static function authenticate($username, $password) {
    return Database::getUserWithPassword($username, $password);
 }

  public static function logout() {
    unset($_SESSION['user']);
  }

}