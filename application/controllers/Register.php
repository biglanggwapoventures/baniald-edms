	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends My_Controller{

	public function __construct(){

        parent::__construct();

        $this->load->model('User_model', 'user');
    }
	
	public function index(){
		
		//$this->load->view('header');
		$this->load_view('Register/register');
		//$this->load->view('footer');
	}

	function save(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
		// $this->form_validation->set_rules('middlename', 'Middle Name', 'required|trim');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|trim');
		$this->form_validation->set_rules('cellphone_no', 'Mobile', 'required|trim|integer|min_length[11]|max_length[11]');
		// $this->form_validation->set_rules('telephone_no', 'Telephone', 'required|trim');
		$this->form_validation->set_rules('username','Username', 'required|min_length[4]|is_unique[users.username]', array( 'is_unique' => 'The %s is already in use!','required' => 'Please Fill up the %s.'));
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		$this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'required|trim');
		$this->form_validation->set_rules('age', 'Age', 'required|trim');		
		$this->form_validation->set_rules('sex', 'Sex', 'required|trim');
	
		if($this->form_validation->run()){
			
			$this->load->model('Register/Register_model');

			$firstname 		  = $this->input->post('firstname');
			$lastname 		  = $this->input->post('lastname');
			$middlename 	  = $this->input->post('middlename');
			$email_address    = $this->input->post('email_address');
			$cellphone_no 	  = $this->input->post('cellphone_no');
			$telephone_no 	  = $this->input->post('telephone_no');
			$username 		  = $this->input->post('username');
			$password 		  = $this->input->post('password');
			$confirm_password = $this->input->post('confirm_password');
			$dateofbirth 	  = $this->input->post('dateofbirth');
			$age 			  = $this->input->post('age');
			$sex 			  = $this->input->post('sex');

			$data = array(

				'firstname'   	=> $firstname,
				'lastname'   	=> $lastname,
				'middlename' 	=> $middlename,
				'email_address' => $email_address,
				'cellphone_no'	=> $cellphone_no,
				'telephone_no'	=> $telephone_no,
				'username'   	=> $username,
				'password'   	=> md5($password),
				'dateofbirth'	=> $dateofbirth,
				'age' 			=> $age,
				'sex' 			=> $sex,
				
				);

			if($this->user->is_first_user()){

				$data['user_type'] = 'captain';

			}
			else{

				$data['user_type'] = 'resident';
			}

			
			$success = $this->Register_model->register($data);
			
			if($success){
				
				$this->session->set_flashdata('success',true);	
				redirect('login', 'refresh');				
			}
			
		}
			else{
				//	$this->load->view('header');
				$this->load_view('Register/register');
				//$this->load->view('footer');
			}
	}

}