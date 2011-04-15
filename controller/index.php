<?php

Class indexController Extends Controller {

public $load;

public function index($path) {
	$load = new Load();
	$load->model('index', $path);

	$this->model = new indexModel();
	$data = $this->model->user_info();

	$load->view('index', $path, $data);
}

}
