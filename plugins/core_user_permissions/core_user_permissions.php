<?php

namespace Obsidian;

class core_user_permissions {

  public function page_load($event) {
    echo 'CoreUserManagement->load_front_page()';
    echo '<br>';
    print_r($event);
  }

}
