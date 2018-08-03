<?php

namespace Obsidian;

define("CHANNEL_MAIN_NAME","general");

class Channel
{

    /**
     * Adds a channel.
     *
     * @param $name
     */
    static function add_channel($name) {
        $channels = self::get_channels();
        $c = new Channel();
        $c->name = $name;
        $c->users = array();
        array_push($channels, $c);
        self::save_channels($channels);
    }

    /**
     * Adds a user to a channel.
     *
     * @param $user
     * @param $channel_name
     */
    static function add_user_to_channel(&$user, $channel_name) {

        if ($user->channels == null)
            $user->channels = array();
        array_push($user->channels, $channel_name);

        $channels = self::get_channels();

        foreach ($channels as &$channel) {
            if($channel['name'] == $channel_name)
            {
                array_push($channel['users'], $user->username);
            }
        }

        self::save_channels($channels);
    }

    /**
     * Removes a user from a channel.
     *
     * @param $username
     * @param $channel_name
     */
    static function remove_user_from_channel($username, $channel_name) {
        $channels = self::get_channels();
        foreach ($channels as $c_key => &$c_value){
            if($c_value['name'] == $channel_name) {
                foreach ($channels[$c_key]['users'] as $u_key => &$u_value) {
                    if($u_value == $username)
                        unset($channels[$c_key]['users'][$u_key]);
                }
            }
        }
        self::save_channels($channels);
    }

    /**
     * This function returns a list of all created channels.
     *
     * @return mixed
     */
    static function get_channels() {
        $channels = file_get_contents('../data/channels.json');
        return json_decode($channels, TRUE);
    }

    static function save_channels($channels) {
        file_put_contents('../data/channels.json', json_encode($channels, TRUE));
    }

}