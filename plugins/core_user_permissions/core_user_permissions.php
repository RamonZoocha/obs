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

    elseif ($event['uri'] == '/logout') {
      Template::render('goodbye', ['message' => 'You have logged out.']);
    }

  }

  public function login_attempt_after(&$event) {
    if($event['vars']['success']) {
      User::redirect('chat');
    }
    else {
      Template::render('login', ['warning' => 'Invalid login.']);
    }
  }

  public function register_attempt_after(&$event) {
    if($event['vars']['success']) {
      Template::render('login', ['warning' => 'Welcome, you can now login.']);
    }
    else {
      Template::render('register', ['warning' => 'There was an error. Make sure both password are equal. Or try a different username.']);
    }
  }

}

