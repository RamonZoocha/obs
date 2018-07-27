<?php

class Settings {

    static function save_settings() {

    }

    static function load($key) {

        if($key == 'allow_guests')
            return true;

    }

}