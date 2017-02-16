<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settlementcontroller extends CI_Controller {

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


 	//****** 	public function index(){

	//   	$header_data['page_name'] = 'Home';
	//   	$data = $this->user->find($this->user_id);

	//     $this->load->view('resident/header', $header_data);
	//     $this->load->view('resident/nav', $data);
	//     $this->load->view('resident/homeview');
	//     $this->load->view('resident/footer');
	// ******}


	// function for displaying data from brgyclearance form
	public function SettlementForm(){


		$header_data['page_name'] = 'Request for Amicable Settlement Form';
 		
 		$data = $this->user->find($this->user_id);
							
				$this->load->view('Header/resident_header', $header_data);
				$this->load->view('Resident/nav_view', 	$data);
				$this->load->view('Resident/settlementform', $data);
				$this->load->view('Footer/resident_footer');
 			
		}
		
}