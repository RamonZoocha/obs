<?php

/**
 * This function loads all files from the src dir, ignoring the autoload file itself.
 *
 */
foreach (scandir(dirname(__FILE__)) as $filename) {
    $path = dirname(__FILE__) . '/' . $filename;
    if (is_file($path) && !strpos($path, 'autoload')) {
        require $path;
    }
}