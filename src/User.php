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

    if(self::authenticate($username, $password)) {
      $_SESSION['user'] = Database::getUser($username);
      return true;
    }

    else
      return false;

  }

  public static function authenticate($username, $password) {

    $user = Database::getUser($username);

    if ($user == null)
      return false;

    elseif ($user['password'] === $password)
      return true;

    else
      return false;
 }

  public static function logout() {
    unset($_SESSION['user']);
  }

  public static function register($params){

    if(isset($params['password_1']) && $params['password_2'])
    {
      // Are both password set?
      if($params['password_1'] != $params['password_2'])
        // Are they different? If so, return false.
        return false;
    }

    if(isset($params['username'])){
      // Is username set?
      if(Database::getUser($params['username']) != null)
        // Is there a user with this username? If so, return false.
        return false;
    }

    return Database::insertUser($params);

  }

}