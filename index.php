<?php

ini_set('display_errors', 1);

/*** define the site path ***/
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

//Define our basepath
$path = "/skinnymvc";
 
//Take the initial PATH.
$url = $_SERVER['REQUEST_URI'];
$url = str_replace($path,"",$url);
$array_tmp_uri = preg_split('[\\/]', $url, -1, PREG_SPLIT_NO_EMPTY);

require(__SITE_PATH . '/applications/init.php');
