<?php

class Load {

public $viewPath;

public $modelPath;

public $model;

function model($name) {
	$this->modelPath = __SITE_PATH . '/models/' . $name . '.php';
		
	include $this->modelPath;

	$this->model = new indexModel();
}

function view($name, $data = null) {
	if(is_array($data)) {
		extract($data);
	}

	$this->viewPath = __SITE_PATH . '/views/' . $name . '.php';
		
	include $this->viewPath;
}

}
