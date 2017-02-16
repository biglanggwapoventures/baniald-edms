<?php

class Treasurer_listing extends My_TreasurerFormsListController {

	protected $view_file = 'view_reviewed_request';
	protected $header = 'List of Reviewed Requests';
	protected $form_id;

	public function __construct()
	{
		parent::__construct();
		// $this->form_id = $this->input->get('form_id');
	}

	// public function view_specific_form($id,$formid){


	// 	$this->load->model('Secretary/Secretarymodel');

		
	// 	$this->load->view('Header/mainheader');

	// 	if($formid == 10){
	// 	$data['formdata'] = $this->Secretarymodel->getSpecificDataForFormBRGY($id,$formid);
	// 	$this->load->view('secretary/blotterview', $data);	
	// 	}
	// 	if($formid == 9){
	// 	$data['formdata'] = $this->Secretarymodel->getSpecificDataForFormBRGY($id,$formid);
	// 	$this->load->view('secretary/financialassistanceview', $data);	

	// 	}
	// 	if($formid == 8)
	// 	{
	// 	$data['formdata'] = $this->Secretarymodel->getSpecificDataForFormPWD($id,$formid);
	// 	$this->load->view('secretary/pwdregistrationview', $data);
	// 	}
	// 	//Senior Citizen
	// 	if($formid == 2)
	// 	{
	// 	$data['formdata'] = $this->Secretarymodel->getSpecificDataForFormPWD($id,$formid);
	// 	$this->load->view('secretary/pwdregistrationview', $data);
	// 	}
	// 	//Brgy Clearance
	// 	if($formid == 1){
	// 	$data['formdata'] = $this->Secretarymodel->getSpecificDataForFormBRGY($id,$formid);
	// 	$this->load->view('secretary/brgyclearanceview', $data);	
	// 	}

	// 	$this->load->view('Footer/secretary_footer');

	// }

	public function payment_status($id,$formid)
	{
		$this->tre->update_status_paid($id);
		redirect("treasurer_listing/?form_id={$formid}");
	}
}