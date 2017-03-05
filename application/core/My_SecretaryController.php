<?php

class My_SecretaryController extends My_Controller{

	protected $index_file;
	protected $model;

	public function __construct() {
		
		parent::__construct();
		// $this->load->model()
	}

	protected function index() {
		
		if(){}
		$this->load->view('Header/secretary_header',$header_data);
		$this->load->view($index_file);
		$this->load->view('Footer/secretary_footer');
	}


	protected function appo()
	{
		$this->load->view('Header/secretary_header',$header_data);
		$this->load->view($index_file);
		$this->load->view('Footer/secretary_footer');
	}

}