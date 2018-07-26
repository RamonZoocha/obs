<?php

namespace Obsidian;

class User
{
    static $online_users = array();

    static function is_logged_in()
    {
        return isset($_SESSION['user']);
    }
}