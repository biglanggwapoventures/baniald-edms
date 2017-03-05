<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaintcontroller extends CI_Controller {

	//variable from the table users
	protected $user_id;

	// Suitable for any initalization instantiation 
	public function __construct(){

        parent::__construct();

        //loads the model (register_model) with the alias of user
		$this->load->model('Register/register_model', 'user');

		 //loads the model (resident_model)
		$this->load->model('Resident/Resident_model');
		
		//sets session if user is (logged_in)
		if($this->session->userdata('logged_in')){
			$this->user_id = $this->session->userdata('logged_in')['user_id'];

		} 
		//* If not logged in redirect to login controller
		else{
			redirect('login', 'refresh');
		}
	}

	// function for displaying the blank blotter form
	public function Complaint_Form(){

		//Title for the page
		$header_data['page_name'] = 'Request for Complaint Form';
		
		//get the all the data for a specifc user  using id
	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', $header_data);
	    $this->load->view('Resident/nav_view', $data);
	    $this->load->view('Resident/complaintform', ['data' => $data]);
	    $this->load->view('Footer/resident_footer');
	}
	
}