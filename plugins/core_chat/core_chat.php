<?php

namespace Obsidian;

use Obsidian\User;

class core_chat {

  public function chat_load(&$event) {

    if(User::isUserLoggedIn()) {
      User::redirect('logout');
      return;
    }


    Template::render('chat', []);

  }

}

