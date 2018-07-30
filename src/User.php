<?php

namespace Obsidian;

define("GROUP_NAME_GUEST","guest");
define("GROUP_NAME_REGISTERED","registered");
define("GROUP_NAME_MODERATOR","moderator");
define("GROUP_NAME_ADMIN","admin");

class User
{
    //User attributes.
    public $username;
    public $group;
    public $channels;

    //Static functions.
    static function is_logged_in()
    {
        //If he's logged in, check for his existence on the array of online users.
        //This makes sure that users who have been kicked won't be allowed to view the chat.
        return isset($_SESSION['user']) && (self::get_online_user($_SESSION['user']->username) != null);
    }

    static function validate_login($username, $password) {

        //Gets registered user based on its username.
        $user = self::get_registered_user($username);

        //If the registered user doesn't exist.
        if($user == null) {
            //Should we allow guests?
            if(!\Settings::load('allow_guests'))
                return self::response(false, 'Guests not allowed at this moment.');
            //Is username valid?
            else if(!self::validate_username($username))
                return self::response(false, 'Invalid username.');
            //All good, insert user on online user list and set its session.
            else {
                $user = new User();
                $user->username = $username;
                $user->group = GROUP_NAME_GUEST;
                $_SESSION['user'] = $user;
                self::add_user_to_online_list($user);
                return self::response(true, null);
            }
        }

        //If the registered user does exist.
        else {
            //Is the password incorrect?
            if($user->password != md5($password))
                return self::response(false, 'Invalid login.');
            else {
                $_SESSION['user'] = $user;
                self::add_user_to_online_list($user);
                return self::response(true, null);
            }
        }
    }

    static function add_user_to_online_list($user) {
        //Load the online users list from file.
        $online_users = file_get_contents('../data/users_online.json');
        $online_users = json_decode($online_users);
        //Insert user on the list.
        array_push($online_users, $user);
        //Save file with the new list.
        file_put_contents('../data/users_online.json', json_encode($online_users));
    }

    static function add_user_to_registered_list($user) {
        //Load the online users list from file.
        $registered_users = file_get_contents('../data/users_registered.json');
        $registered_users = json_decode($registered_users);
        //Insert user on the list.
        array_push($registered_users, $user);
        //Save file with the new list.
        file_put_contents('../data/users_registered.json', json_encode($registered_users));
    }

    static function get_registered_user($username) {
        foreach (self::get_registered_users() as $user) {
            if($user->username == $username)
                return $user;
        }
    }

    static function get_registered_users(){
        $registered_users = file_get_contents('../data/users_registered.json');
        return json_decode($registered_users);
    }

    static function get_online_user($username) {
        foreach (self::get_online_users() as $user) {
            if($user->username == $username)
                return $user;
        }
    }

    static function get_online_users(){
        $online_users = file_get_contents('../data/users_online.json');
        return json_decode($online_users);
    }

    static function register_user($username, $password) {
        if(!self::validate_username($username))
            return self::response(false, 'Invalid username.');
        if(!\Settings::load('allow_new_users'))
            return self::response(false, 'New users not allowed at this moment.');
        if(self::get_registered_user($username) != null)
            return self::response(false, 'Username unavailable.');
        else {
            $user = new User();
            $user->username = $username;
            $user->password = md5($password);
            $user->group = GROUP_NAME_REGISTERED;
            Channel::add_user_to_channel($user, CHANNEL_MAIN_NAME);
            self::add_user_to_registered_list($user);
        }
        return self::response(true, null);
    }

    static function response($result, $message) {
        return ['result' => $result, 'message' => $message];
    }

    static function validate_username($username) {
        return true;
    }

}