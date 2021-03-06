<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Erpatcontroller extends CI_Controller {

 protected $user_id;

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

	public function Erpat_Form(){

		$header_data['page_name'] = 'Erpat Form';
		
	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', $header_data);
	    $this->load->view('Resident/nav_view', $data);
	    $this->load->view('Resident/erpatform');
	    $this->load->view('Footer/resident_footer');
	}

	
}