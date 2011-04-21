<?php

Class Controller {

public $file;

public $load;

function __construct() {
	$this->load = new Load();
}

function loader($name) {
	$controllerName = $name . 'Controller';
	$this->file = __SITE_PATH . '/controller/' . $name . '.php';
	
	if(is_readable($this->file) == false) {
		$this->file = __SITE_PATH . '/controller/index.php';
		$controllerName = 'indexController';
	}

	include $this->file;
	
	$controller = new $controllerName();
	$controller->index();
}

}
