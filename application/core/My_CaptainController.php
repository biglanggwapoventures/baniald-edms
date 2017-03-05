<?php

class My_CaptainController extends My_Controller {

	protected $index_file;
	protected $model;

	public function __construct() {
		
		parent::__construct();
	
	}

	protected function index() {
		
		if(){}
		$this->load->view('captain/header',$header_data);
		$this->load->view($index_file);
		$this->load->view('captain/footer');
	
	}

	protected function appo() {
		
		$this->load->view('captain/header',$header_data);
		$this->load->view($index_file);
		$this->load->view('captain/footer');

	}
}