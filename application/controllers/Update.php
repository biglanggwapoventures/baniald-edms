<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function __construct(){

        parent::__construct();

       
		$this->load->model('Register/Register_model', 'user');
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

	//function for displaying the main update profile view
	public function index(){

		$user_id = $this->session->userdata('logged_in')['user_id'];
		
		$data = $this->user->find($user_id);

		// $this->load->helper('form');

		$header_data['page_name'] = 'Update Profile';
	
		$this->load->view('Header/resident_header', $header_data);
		$this->load->view('Resident/nav_view', 	$data);
		$this->load->view('Resident/updateprofile_view', compact('data'));
		$this->load->view('Footer/resident_footer');
		
	}

	// function for saving user update account
	public function save(){

		$this->load->library('form_validation');

		$this->form_validation->set_rules('firstname', 'First Name', 'required|trim');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('placeofbirth', 'Place of Birth', 'required|trim');
		$this->form_validation->set_rules('dateofbirth', 'Date of Birth', 'required|trim');
		$this->form_validation->set_rules('citizenship', 'Citizenship', 'required|trim');
		$this->form_validation->set_rules('cellphone_no', 'Mobile Number', 'required|trim|integer');
		$this->form_validation->set_rules('email_address', 'Email Address', 'required|trim');
		$this->form_validation->set_rules('home_address', 'Home And Street No:', 'required|trim');
		$this->form_validation->set_rules('sitio', 'Sitio', 'required|trim');


		if($this->form_validation->run()){

		$data = [];

		$user_id = $this->session->userdata('logged_in')['user_id'];

		$data['government']= elements([

			'sss_no',
			'gsis_no',
			'tin_no',
			'pag_ibig_no',
			'philhealth_no',
			'philhealth_status'

		],
		$this->input->post());

		$data['government']['resident_id'] = $user_id;

		$data['profile'] = elements([

			'firstname',
			'lastname',
			'middlename', 
			'age', 
			'nickname',
			'dateofbirth', 
			'placeofbirth', 
			'civil_status', 
			'religion',
			'citizenship',
			'occupation',
			'monthly_income',
			'sex', 
			'skills' , 
			'talent', 
			'hobbies',
			'other_skills',
			'telephone_no',
			'cellphone_no',
			'email_address',
			'educational_attainment',
			'barangay',
			'sitio',
			'home_address',
			'region',
			'municipality',
			'prov_address'

			],
			$this->input->post());
			
			
		$family_composition = [];
			
			if($fam = $this->input->post('fc')){
				
				foreach($this->input->post('fc')['name'] as $i => $val){

					$family_composition[] = [

						'name' 							=> $val,
						'family_status' 				=> isset($fam['family_status'][$i]) ? $fam['family_status'][$i] : '',
						'family_age' 					=> isset($fam['family_age'][$i]) ? $fam['family_age'][$i] : '',
						'family_occupation' 			=> isset($fam['family_occupation'][$i]) ? $fam['family_occupation'][$i] : '',
						'monthly_salary' 				=> isset($fam['monthly_salary'][$i]) ? $fam['monthly_salary'][$i] : '',
						'relationship' 					=> isset($fam['relationship'][$i]) ? $fam['relationship'][$i] : '',
						'family_educational_attainment' => isset($fam['family_educational_attainment'][$i]) ? $fam['family_educational_attainment'][$i] : '',
						'contact_number' 				=> isset($fam['contact_number'][$i]) ? $fam['contact_number'][$i] : '',
						'dateofbirth' 					=> isset($fam['dateofbirth'][$i]) ? $fam['dateofbirth'][$i] : '',
						// 'spouse_name'					=> $fam['spouse_name'][$i],
						// 'spouse_age'					=> $fam['spouse_age'][$i],
						// 'spouse_address'				=> $fam['spouse_address'][$i],
						// 'spouse_dateofbirth'			=> $fam['spouse_dateofbirth'][$i],
						// 'spouse_income'					=> $fam['spouse_income'][$i],
						// 'spouse_occupation'				=> $fam['spouse_occupation'][$i],
						// 'spouse_educational_attainment' => $fam['spouse_educational_attainment'][$i],
						'no_of_children'				=> isset($fam['no_of_children'][$i]) ? $fam['no_of_children'][$i] : '',
						'user_id' 						=> $user_id,

					];
				}

				$data['family'] = $family_composition;
			}
	
			$success = $this->user->update($user_id, $data);

			// $user = $this->session->userdata('logged_in');
			
			$data['profile']['user_id'] = $user_id;
			$data['profile']['image_filename'] = $this->session->userdata('logged_in')['image_filename'];
			$this->session->set_userdata('logged_in', $data['profile']);
			
			// $this->session->set_flashdata('success', true);	
			// redirect('home/home_profile', 'refresh');	
			
		
			if(!empty($_FILES['userfile']['name']))
				$this->do_upload();
			
			else{
				$this->session->set_flashdata('success',true);	

				redirect('home/home_profile', 'refresh');
			}
		}
		else{
			$this->session->set_flashdata('errors', $this->form_validation->error_array());
			redirect('update');

		}
	
	}
	
	public function do_upload(){
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		   
	    $this->load->library('upload', $config);
	    $this->upload->initialize($config);

	    $success = $this->upload->do_upload('userfile');

	    if (!$success){
	          	echo $this->upload->display_errors();
	        }
	    else{
	            $this->load->model('Resident_model');
	        	
	            $data = $this->upload->data();
	            $filename = $data['file_name'];
	            
	            $user = $this->session->userdata('logged_in');

	            $this->Resident_model->set_image($user['user_id'], $filename);

	            // $userdata  = $this->session->userdata('logged_in');
	            $user['image_filename'] = $filename;
	            $this->session->set_userdata('logged_in', $user);

	            $this->session->set_flashdata('success', true);	
				redirect('home/home_profile', 'refresh');
			}
    }


}