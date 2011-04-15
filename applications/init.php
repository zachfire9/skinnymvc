<?php

require(__SITE_PATH . '/applications/router.php');
require(__SITE_PATH . '/applications/controller.php');
require(__SITE_PATH . '/applications/load.php');

$router = new Router();

$router->controller(__SITE_PATH, 'index');
