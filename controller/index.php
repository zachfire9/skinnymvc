<?php

Class indexController Extends Controller {

public function index($path) {
	$this->load->model('index', $path);

	$data = $this->load->model->user_info();

	$this->load->view('index', $path, $data);

}

}
