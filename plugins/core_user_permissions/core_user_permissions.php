<?php

namespace Obsidian;

use UserManager;

class core_user_permissions {

  public function page_load($event) {
    echo '"core_user_permissions" notified: <br><br>';
    print_r($event);
    echo '<hr>';
  }

}
