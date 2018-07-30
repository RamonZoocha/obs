<?php

namespace Obsidian;

define("CHANNEL_MAIN_NAME","general");

class Channel
{
    static function add_user_to_channel(&$user, $channel_name) {
        if ($user->channels == null)
            $user->channels = array();
        array_push($user->channels, $channel_name);

        $channels = self::get_channels();

        foreach ($channels as $channel) {
            if($channel->name == $channel_name)
                array_push($channel->users, $user->username);
        }

        self::save_channels($channels);
    }

    static function remove_user_from_channel($username, $channel_name) {

        
    }

    static function get_channels() {
        $channels = file_get_contents('../data/channels.json');
        return json_decode($channels);
    }

    static function save_channels($channels) {
        file_put_contents('../data/channels.json', json_encode($channels));
    }

}