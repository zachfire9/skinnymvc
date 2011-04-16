<?php

Class indexController Extends Controller {

public function index() {
	$this->load->model('index');

	$data = $this->load->model->user_info();

	$this->load->view('index', $data);

}

}
