<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Captaincontroller extends CI_Controller {

	public function __construct() {

    	parent::__construct();

		$this->load->model('Captain/Captainmodel', 'cap');
      
      	if(!$this->session->userdata('logged_in')){

        	redirect('login');
      	}
    }

    //view brgyclearance
	public function brgyclearanceview($id){

		$header_data['page_name'] = 'View Business Clearance';

		$data['request_profile'] = $this->cap->get_brgy_form_by_id($id);

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Captain/brgyclearanceview',$data);
		$this->load->view('Footer/mainfooter');
		
	}

    //functioin for displaying lists of  Pending Request 
	public function index(){	

		$header_data['page_name'] = 'Pending Requests';
		$data['requests_pendings'] 	= $this->cap->get_pending_request_forms();

		$this->load->view('Header/mainheader', $header_data);
		$this->load->view('Captain/view_pending_request', $data);
		$this->load->view('Footer/mainfooter');

	}

	//function for displaying list of approved request from secretary staus is paid
	public function view_paid_request(){
		
		$header_data['page_name'] = 'Paid Requests';
		$data['requests_paid'] 	= $this->cap->get_paid_forms();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Captain/view_paid_request', $data);
		$this->load->view('Footer/mainfooter');
	}

	//function for displaying list of approved requests
	public function view_approved_request(){

		$header_data['page_name'] = 'Approved Requests';

		$data['requests_approved'] 	= $this->cap->get_approved_forms();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Captain/view_approved_request', $data);
		$this->load->view('Footer/mainfooter');
	}

	//function for displaying list of approve requests for captain
	public function approve_request_for_captain($id){
			
			$this->cap->approve_request($id);	
			$this->session->set_flashdata('success',true);
			
			redirect('Captaincontroller/view_approved_request');
	
	}

	//this function is for calling the captain model to set the status to approved
	public function approve($id){
		$this->cap->approve_requests($id);
		redirect('Captaincontroller');
	}

	public function manageuser(){
		
		$header_data['page_name'] = 'Manage User';

		$data['list_of_user'] = $this->cap->get_users();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Captain/manageuser_view', $data);
		$this->load->view('Footer/mainfooter');
	}

	public function userlist(){
		
		$header_data['page_name'] = 'List of User';

		$data['list_of_user'] = $this->cap->get_userslist();

		$this->load->view('Header/mainheader',$header_data);
		$this->load->view('Captain/list_of_resident', $data);
		$this->load->view('Footer/mainfooter');
	}


	public function updateAdminaccount(){
		


		$header_data['page_name'] = 'Update Account';
        
        $data = array(
        	'firstname'		=> $this->input->post('firstname'),
        	'lastname'		=> $this->input->post('lastname'),
        	'username'		=> $this->input->post('username'),
        	'password'		=> $this->input->post('password'),
        	'email_address'	=> $this->input->post('email_address'),
        	);

		$this->cap->updateAdmin($data);
		
		$this->output->set_content_type('json')
			->set_output(json_encode(['result'=> true]));
	}
}