<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	protected $user_id;

	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('Register/Register_model', 'user');
		$this->load->model('Resident/Resident_model');

		if($this->session->userdata('logged_in')){
			
			$this->user_id = $this->session->userdata('logged_in')['user_id'];
		} 

		//* If not logged in redirect to login controller
		else{
			
			redirect('login', 'refresh');
		}
	}

	public function home_profile(){
		
	  	$header_data['page_name'] = 'My Profile';
	  	
	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', $header_data);
	    $this->load->view('Resident/nav_view', $data);

	    $data['my_form_requests']= $this->Resident_model->get_my_request_forms($this->user_id);

	    $this->load->view('Resident/profile_view');
	    $this->load->view('Footer/resident_footer');
	}

	public function MyRequestedForms(){

		$header_data['page_name'] = 'List of Requested Forms';
	 
		$data = $this->user->find($this->user_id);
				
		$this->load->view('Header/resident_header', $header_data);
		$this->load->view('Resident/nav_view', 	$data);
				
		//**** The individual page

		$data['my_form_requests']= $this->Resident_model->get_my_request_forms($this->user_id);

		$this->load->view('Resident/myrequestedforms_view', $data);
		$this->load->view('Footer/resident_footer');

	}
	 
	public function viewRequestedHistory(){

		$header_data['page_name'] = 'List of Approved and Disapproved Request';
	 
		$data = $this->user->find($this->user_id);
				
		$this->load->view('Header/resident_header', $header_data);
		$this->load->view('Resident/nav_view', 	$data);
				
		//**** The individual page

		$data['view_history']= $this->Resident_model->get_my_request_history($this->user_id);

		$this->load->view('Resident/myrequestedhistory_view', $data);
		$this->load->view('Footer/resident_footer');
	  		
	  	}

	 public function viewFeedback(){
	 	
	 	$header_data['page_name'] = 'Notifications';
	 
		$data = $this->user->find($this->user_id);
				
		$this->load->view('Header/resident_header', $header_data);
		$this->load->view('Resident/nav_view', $data);
				
		//**** The individual page

		$data['view_feedback']= $this->Resident_model->getfeedback($this->user_id);

		$this->load->view('Resident/notification_view', $data);
		$this->load->view('Footer/resident_footer');
	 }
  
}