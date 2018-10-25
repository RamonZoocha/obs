<?php

namespace Obsidian;

use User;

class core_chat {

  public function chat_load(&$event) {

    echo '"core_chat" notified: <br><br>';
    print_r($event);
    echo '<hr>';

    Template::render('chat', []);

  }

}

