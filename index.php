<?php

use WebCrawler\App;

ignore_user_abort(true);
set_time_limit(0);

require_once __DIR__. '/bootstrap.php';

define('FILE_NAME', 'REPLACE_WITH_FILE_NAME');
define('TYPE_CRAWLER', 'REPLACE_WITH_HANDLER');

App::init();
