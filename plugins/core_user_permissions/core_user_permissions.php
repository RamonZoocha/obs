<?php

namespace Obsidian;

use User;

class core_user_permissions {

  public function page_load($event) {

    if($event['page'] != 'login')
      return;

    echo '"core_user_permissions" notified: <br><br>';
    print_r($event);
    echo '<hr>';

  }

}

