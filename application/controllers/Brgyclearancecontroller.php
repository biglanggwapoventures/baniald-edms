<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brgyclearancecontroller extends CI_Controller {

 protected $user_id;

 	// Suitable for any initalization 
	public function __construct(){

        parent::__construct();

		$this->load->model('Register/register_model', 'user');
		$this->load->model('Resident/Resident_model');
		
		if($this->session->userdata('logged_in')){

			$this->user_id = $this->session->userdata('logged_in')['user_id'];

		} 
		//* If not logged in redirect to login controller
		else{
			redirect('login', 'refresh');
		}
	}

	// function for displaying data from brgyclearance form
	public function BrgyClearanceForm(){


		$header_data['page_name'] = 'Request for Business Clearance Form';
 			
 			$this->load->library('form_validation');

 			$this->form_validation->set_rules('business_name', 'Business Name', 'required|trim');
 			$this->form_validation->set_rules('business_address', 'Business Addresss', 'required|trim');
 			$this->form_validation->set_rules('capital_investment', 'Capital Investment', 'required|trim|integer');
 			$this->form_validation->set_rules('amount', 'Amount', 'required|trim|integer');
 			$this->form_validation->set_rules('business_desc1', 'Description ', 'required|trim');
 			$this->form_validation->set_rules('business_desc2', 'Description', 'required|trim');
 			$this->form_validation->set_rules('business_desc3', 'Description', 'required|trim');
 			$this->form_validation->set_rules('business_desc4', 'Description', 'required|trim');
 			$this->form_validation->set_rules('business_desc5', 'Description', 'required|trim');


 			if($this->form_validation->run()){

 				$this->BrgyClearanceView();

 			}

 			else{

				$data = $this->user->find($this->user_id);
							
				$this->load->view('Header/resident_header', $header_data);
				$this->load->view('Resident/nav_view', 	$data);
				$this->load->view('Resident/brgyclearanceform', $data);
				$this->load->view('Footer/resident_footer');
			}
	}

		//  function for displaying the form after inputing all fields required
		public function BrgyClearanceView(){

		$header_data['page_name'] = 'Business Clearance View';
 			
		$data = $this->user->find($this->user_id);	
		$this->load->view('Header/resident_header', $header_data);
		$this->load->view('Resident/nav_view', 	$data);
		//**** The individual page
		$brgy_clearance_data['resident_name']  		=  $this->input->post('resident_name');
		$brgy_clearance_data['business_name']  		=  $this->input->post('business_name');
		$brgy_clearance_data['business_address'] 	=  $this->input->post('business_address');
		$brgy_clearance_data['capital_investment'] 	=  $this->input->post('capital_investment');
		$brgy_clearance_data['age'] 				=  $this->input->post('age');
		$brgy_clearance_data['amount'] 				=  $this->input->post('amount');

		$brgy_clearance_data['business_desc1'] 		=  $this->input->post('business_desc1');
		$brgy_clearance_data['business_desc2'] 		=  $this->input->post('business_desc2');
		$brgy_clearance_data['business_desc3'] 		=  $this->input->post('business_desc3');
		$brgy_clearance_data['business_desc4'] 		=  $this->input->post('business_desc4');
		$brgy_clearance_data['business_desc5'] 		=  $this->input->post('business_desc5');
		
		$this->load->view('Resident/brgyclearance_view', $brgy_clearance_data);
		//**** END
		$this->load->view('Footer/resident_footer');

	}

	
	// funciton for inserting data to brgy clearance form and call the model for inserting data to the database
	public function insert_brgyClearance(){

		//request form first
		$requests_forms_data['requests_forms_id'] 		=  '';
		$requests_forms_data['requests_forms_type'] 	=  "Brgy Clearance";
		$requests_forms_data['forms_id'] 				=  '1';
		$requests_forms_data['resident_id'] 			=   $this->user_id;
		$requests_forms_data['request_status'] 			=  'pending';
		// $requests_forms_data['requests_created'] 	=  date("Y-m-d");
		$requests_forms_data['date_cleared'] 			=  	NULL;

		$requests_forms_id = $this->Resident_model->insert_requests_forms($requests_forms_data);
		

		//**** The individual page
		$brgy_clearance_data['brgy_clearance_id']  	=  '';
		$brgy_clearance_data['resident_id']  		=  $this->session->userdata('logged_in')['user_id'] ;
		$brgy_clearance_data['businessname']  		=  $this->input->post('business_name');
		$brgy_clearance_data['businessaddress'] 	=  $this->input->post('business_address');
		$brgy_clearance_data['capitalinvested'] 	=  $this->input->post('capital_investment');
		$brgy_clearance_data['amount'] 				=  $this->input->post('amount');
		$brgy_clearance_data['requests_forms_id'] 	=  $requests_forms_id;
		$brgy_clearance_data['business_line'] = 

		json_encode(
		array('Description1' => $this->input->post('business_desc1'),
			   'Description2'=> $this->input->post('business_desc2'),
			   'Description3'=> $this->input->post('business_desc3'),
			   'Description4'=> $this->input->post('business_desc4'),
			   'Description5'=> $this->input->post('business_desc5')
			));

	
			
		if($this->Resident_model->insert_brgyclearance_data($brgy_clearance_data)){

			$this->session->set_flashdata('success' ,true);
			

		}		

		redirect('Homecontroller/MyRequestedForms');


	}
	
}