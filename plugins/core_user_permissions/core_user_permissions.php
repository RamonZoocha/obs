<?php

namespace Obsidian;

use Obsidian\User;
use Obsidian\Template;

class core_user_permissions {

  public function page_load(&$event) {

    if($event['uri'] == '/') {
      if(!User::isUserLoggedIn())
        Template::render('login', []);
    }

    else {
      if(!User::isUserLoggedIn())
        header('Location: '  . "\\");
    }

    echo '<br><br>"core_user_permissions" notified: <br><br>';
    print_r($event);
    echo '<hr>';

  }

}

