<?php

ini_set('display_errors', 1);

 /*** define the site path ***/
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);

require(__SITE_PATH . '/applications/init.php');
