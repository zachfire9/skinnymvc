<?php

Class Controller {

public $file;

public $load;

function __construct() {
	$this->load = new Load();
}

function loader($name, $path) {
	$controllerName = $name . 'Controller';
	$this->file = $path . '/controller/' . $name . '.php';
		
	include $this->file;
	
	$controller = new $controllerName();
	$controller->index($path);
}



}
