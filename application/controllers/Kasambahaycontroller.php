<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasambahaycontroller extends CI_Controller {

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
			redirect('logincontroller', 'refresh');
		}
	}

	public function Kasambahay_Form(){

		$header_data['page_name'] = 'Request for Kasambahay Registration Form';

		$this->load->library('form_validation');

 		$this->form_validation->set_rules('nature_of_work', 'Nature of Work', 'required|trim');
 		$this->form_validation->set_rules('employment_arrangement', 'Employment Arrangement', 'required|trim');
 		$this->form_validation->set_rules('capital_investment', 'Capital Investment', 'required|trim|integer');
 		$this->form_validation->set_rules('name_of_employer', 'Name of Employer', 'required|trim');

		
	  	$data = $this->user->find($this->user_id);

	    $this->load->view('Header/resident_header', $header_data);
	    $this->load->view('Resident/nav_view', $data);
	    $this->load->view('resident/kasambahayform');
	    $this->load->view('Footer/resident_footer');
	}

	public function insert_PWD(){

		//**** The individual page
		$kasambahay_data['kasambahay_id']  		=  '';
		$kasambahay_data['resident_id']  		=  $this->session->userdata('logged_in')['user_id'] ;
		$kasambahay_data['firstname']  			=  $this->input->post('firstname');
		$kasambahay_data['middlename'] 			=  $this->input->post('middlename');
		$kasambahay_data['lastname'] 			=  $this->input->post('lastname');
	//employers address	$kasambahay_data['age'] 				=  $this->input->post('age');
		$kasambahay_data['home_address'] 		=  $this->input->post('home_address');
		$kasambahay_data['sex'] 				=  $this->input->post('sex');
		$kasambahay_data['civil_status'] 		=  $this->input->post('civil_status');
		$kasambahay_data['age'] 				=  $this->input->post('age');
		$kasambahay_data['dateofbirth']			=  $this->input->post('dateofbirth');
		$kasambahay_data['cellphone_no']		=  $this->input->post('cellphone_no');
		$kasambahay_data['sss_no'] 				=  $this->input->post('sss_no');
		$kasambahay_data['pagibig_no']			=  $this->input->post('pagibig_no');
		$kasambahay_data['philhealth_status'] 	=  $this->input->post('philhealth_status');

		$kasambahay_data['spouse_name'] 		=  $this->input->post('spouse_name');
	//spouse contact number	$kasambahay_data['age'] 				=  $this->input->post('age');
		$kasambahay_data['fathers_name'] 		=  $this->input->post('fathers_name');
		$kasambahay_data['fathers_address'] 	=  $this->input->post('fathers_address');
		$kasambahay_data['mothers_name'] 		=  $this->input->post('mothers_name');
		$kasambahay_data['mothers_address'] 	=  $this->input->post('mothers_address');
		$kasambahay_data['contact_person_name'] =  $this->input->post('contact_person_name');
		$kasambahay_data['contact_person_no']	=  $this->input->post('contact_person_no');

		$kasambahay_data['educational_attainment'] 		=  $this->input->post('educational_attainment');

		$kasambahay_data['monthly_salaray'] 	=  $this->input->post('monthly_salaray');
		$kasambahay_data['employment_arrangement'] 		=  $this->input->post('employment_arrangement');
		$kasambahay_data['nature_of_work'] 		=  $this->input->post('nature_of_work');
		$kasambahay_data['name_of_employer'] 				=  $this->input->post('name_of_employer');

		$kasambahay_id= $this->Resident_model->insert_kasambahay_data($kasambahay_data);
		
	}

	public function view_PWD(){
		$header_data['page_name'] = 'KasambahayFormView';
 			
		$data = $this->user->find($this->user_id);	
		$this->load->view('resident/header', $header_data);
		$this->load->view('resident/nav', 	$data);
		//**** The individual page
		$kasambahay_data['kasambahay_id']  		=  '';
		$kasambahay_data['resident_id']  		=  $this->session->userdata('logged_in')['user_id'] ;
		$kasambahay_data['firstname']  			=  $this->input->post('firstname');
		$kasambahay_data['middlename'] 			=  $this->input->post('middlename');
		$kasambahay_data['lastname'] 			=  $this->input->post('lastname');
	//employers address	$kasambahay_data['age'] 				=  $this->input->post('age');
		$kasambahay_data['home_address'] 		=  $this->input->post('home_address');
		$kasambahay_data['sex'] 				=  $this->input->post('sex');
		$kasambahay_data['civil_status'] 		=  $this->input->post('civil_status');
		$kasambahay_data['age'] 				=  $this->input->post('age');
		$kasambahay_data['dateofbirth']			=  $this->input->post('dateofbirth');
		$kasambahay_data['cellphone_no']		=  $this->input->post('cellphone_no');
		$kasambahay_data['sss_no'] 				=  $this->input->post('sss_no');
		$kasambahay_data['pagibig_no']			=  $this->input->post('pagibig_no');
		$kasambahay_data['philhealth_status'] 	=  $this->input->post('philhealth_status');

		$kasambahay_data['spouse_name'] 		=  $this->input->post('spouse_name');
	//spouse contact number	$kasambahay_data['age'] 				=  $this->input->post('age');
		$kasambahay_data['fathers_name'] 		=  $this->input->post('fathers_name');
		$kasambahay_data['fathers_address'] 	=  $this->input->post('fathers_address');
		$kasambahay_data['mothers_name'] 		=  $this->input->post('mothers_name');
		$kasambahay_data['mothers_address'] 	=  $this->input->post('mothers_address');
		$kasambahay_data['contact_person_name'] =  $this->input->post('contact_person_name');
		$kasambahay_data['contact_person_no']	=  $this->input->post('contact_person_no');

		$kasambahay_data['educational_attainment'] 		=  $this->input->post('educational_attainment');

		$kasambahay_data['monthly_salaray'] 	=  $this->input->post('monthly_salaray');
		$kasambahay_data['employment_arrangement'] 		=  $this->input->post('employment_arrangement');
		$kasambahay_data['nature_of_work'] 		=  $this->input->post('nature_of_work');
		$kasambahay_data['name_of_employer'] 				=  $this->input->post('name_of_employer');
		
		$this->load->view('resident/kasambahayview', $kasambahay_data);
		//**** END
		$this->load->view('Footer/resident_footer');
	

	}
	
}