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

    // If it's chat page.
    elseif ($event['uri'] == '/chat') {

      // If user is not logged in, redirect to login page.
      if(!User::isUserLoggedIn())
        User::redirect('login');

    }

    elseif ($event['uri'] == '/register') {

      if(!User::isUserLoggedIn())
        Template::render('register', []);
      else
        User::redirect('chat');

    }

  }

  public function login_attempt(&$event) {

    $username = $event['vars']['username'];
    $password = $event['vars']['password'];

    if(User::login($username, $password)) {
      User::redirect('chat');
    }

    else {
      $event['vars']['warning'] = 'Invalid login';
      Template::render('login', $event['vars']);
    }
  }

}

