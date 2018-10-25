<?php

namespace Obsidian;

use User;

class core_file_management {

  public function page_load(&$event) {

    echo '"core_file_management" notified: <br><br>';
    print_r($event);
    echo '<hr>';
  }

}

