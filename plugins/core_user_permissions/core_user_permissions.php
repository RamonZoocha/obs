<?php

namespace Obsidian;

use Obsidian\User;
use Obsidian\Template;

class core_user_permissions {

  public function page_load(&$event) {

    // If it's the home page.
    if ($event['uri'] == '/') {

      // If user is not logged in, render login page.
      if(!User::isUserLoggedIn())
        Template::render('login', []);

      // Else, redirect to chat.
      else
        User::redirect('chat');
    }

    // If it's login page.
    elseif ($event['uri'] == '/login') {

      // If user is not logged in, render login page.
      if(!User::isUserLoggedIn())
        Template::render('login', []);

      // Else, redirect to chat.
      else
        User::redirect('chat');
    }

    // If it's login page.
    elseif ($event['uri'] == '/chat') {

      // If user is not logged in, render login page.
      if(!User::isUserLoggedIn())
        User::redirect('/');

      // Else, redirect to chat.
      else
        User::redirect('chat');
    }


    echo '<br><br>"core_user_permissions" notified: <br><br>';
    print_r($event);
    echo '<hr>';

  }


}

