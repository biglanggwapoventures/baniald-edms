<?php

class Captain_listing extends My_CaptainFormsListController {
	
	protected $view_file = 'view_paid_request';
	protected $form_id;

	public function __construct()
	{
		parent::__construct();


		$this->load->model('Captain/Captainmodel', 'cap');
		// $this->form_id = $this->input->get('form_id');
	}

	public function home(){

		$header_data['page_name'] = 'Home';

	  	$this->load->view('Header/mainheader', $header_data);	
		$this->load->view('Captain/captainhome');
		$this->load->view('Footer/mainfooter');

	}

	public function review($id,$formid){

		$this->load->model('Captain/Captainmodel', 'cap');
		$this->cap->review_requests($id);
	
		redirect("captain_listing/?form_id={$formid}");
	}

	public function approve($id,$formid){

		$this->load->model('Captain/Captainmodel','cap');
		$this->cap->approve_requests($id);
	
		redirect("captain_listing/?form_id={$formid}");
	}
	public function disapprove($id,$formid){

		$this->load->model('Captain/Captainmodel','cap');
		$this->cap->disapprove_requests($id);
	
		redirect("captain_listing/?form_id={$formid}");
	}

}