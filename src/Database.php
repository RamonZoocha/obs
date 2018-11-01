<?php

namespace Obsidian;

use MicroDB\Index;

$db = new \MicroDB\Database('../data/users');

class Database {

  static function create(){
    global $db;

    $id = $db->create(
      array(
        'username' => 'userC',
        'password' => '123'
      )
    );
  }

  static function getUser($username) {
    global $db;

    $callback = function($user) use($username) {
      return @$user['username'] == $username;
    };

    $user = $db->first($callback);

    echo json_encode($user);
  }

  static function getUserWithPassword($username, $password) {
    global $db;

    $callback = function($user) use($username, $password) {
      return @$user['username'] == $username &&
        @$user['password'] == $password;
    };

    return $user = $db->first($callback);
  }
}
