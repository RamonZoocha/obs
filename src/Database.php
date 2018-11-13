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

    return $user = $db->first($callback);
  }

  static function insertUser($params) {
    global $db;

    $id = $db->create(
      array(
        'username' => $params['username'],
        'password' => md5($params['password_1']),
      )
    );

    return $id != NULL;

  }
}
