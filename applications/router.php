<?php

Class Router {

function controller($name) {
	$baseController = new Controller();
	$baseController->loader($name, __SITE_PATH);
}

}
