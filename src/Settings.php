<?php

class Settings {

    static function load($key) {
        if($key == 'allow_guests')
            return true;
        if($key == 'allow_new_users')
            return true;
    }
}