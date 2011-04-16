<?php

Class indexController Extends Controller {

public function index($name) {
	$this->load->model($name);

	$data = $this->load->model->user_info();

	$this->load->view($name, $data);

}

}
