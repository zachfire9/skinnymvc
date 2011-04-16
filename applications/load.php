<?php

class Load {

public $viewPath;

public $modelPath;

public $model;

function model($name, $path) {
	$this->modelPath = $path . '/models/' . $name . '.php';
		
	include $this->modelPath;

	$this->model = new indexModel();
}

function view($name, $path, $data = null) {
	if(is_array($data)) {
		extract($data);
	}

	$this->viewPath = $path . '/views/' . $name . '.php';
		
	include $this->viewPath;
}

}
