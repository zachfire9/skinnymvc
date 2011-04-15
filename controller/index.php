<?php

Class indexController Extends Controller {

public function index($path) {
	$this->load->model('index', $path);

	$this->model = new indexModel();
	$data = $this->model->user_info();

	$this->load->view('index', $path, $data);

}

}
