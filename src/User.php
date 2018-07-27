<?php

namespace Obsidian;

define("GUEST_GROUP_NAME","guest");
define("REGISTERED_GROUP_NAME","registered");
define("MODERATOR_GROUP_NAME","moderator");
define("ADMIN_GROUP_NAME","admin");

class User
{
    //User attributes.
    public $username;
    public $group;

    //Static data.
    static $online_users = array();

    //Static functions.
    static function is_logged_in()
    {
        //If the user is not logged in, return false right away.
        if(!isset($_SESSION['user']))
            return false;
        else {
            //If he's logged in, check for his existence on the array of online users.
            //This makes sure that users who have been kicked won't be allowed to view the chat.
            if(!isset($online_users[$_SESSION['user']]))
                return false;
        }

        return true;
    }

    static function validate_login($username, $password) {

        //Gets the user based on its username.
        $user = self::load_user($username);

        //If the user doesn't exist.
        if($user == null) {
            //Should we allow guests?
            if(\Settings::load('allow_guests')) {
                $user = new User();
                $user->username = $username;
                $user->type = GUEST_GROUP_NAME;
                $_SESSION['user'] = $user;
                array_push(User::$online_users, $user);
                return true;
            }

            return false;
        }
    }

    static function load_user($username) {
        return null;
    }

}