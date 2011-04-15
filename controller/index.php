<?php

Class indexController Extends Controller {

public function index($path) {
	$this->load->model('index', $path);

	$this->indexModel = new indexModel();
	$data = $this->indexModel->user_info();

	$this->load->view('index', $path, $data);

}

}
