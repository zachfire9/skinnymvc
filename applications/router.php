<?php

Class Router {

public $path;

function controller($sitePath, $name) {
	$this->path = $sitePath;

	$baseController = new Controller();
	$baseController->loader($name, $this->path);
}

}
