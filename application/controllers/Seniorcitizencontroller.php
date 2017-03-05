<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seniorcitizencontroller extends CI_Controller {

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

	public function Seniorcitizen_Form(){

		$header_data['page_name'] = 'Request for Senior Citizen Form';
		
	  	$data = $this->user->find($this->user_id);

	  	$this->load->library('form_validation');

	  	$this->form_validation->set_rules('osca_id_no', 'OSCA ID No.', 'required|trim');
 		$this->form_validation->set_rules('name_of_organization', 'Name of Organization', 'required|trim');
 		$this->form_validation->set_rules('position', 'Position', 'required|trim');
 		$this->form_validation->set_rules('years_of_service', 'Years of Service', 'required|trim');

 			if($this->form_validation->run()){

 				$this->SeniorCitizenView();

 			}

 			else{

				$data = $this->user->find($this->user_id);
							
				$this->load->view('Header/resident_header', $header_data);
				$this->load->view('Resident/nav_view', 	$data);
				$this->load->view('resident/seniorcitizenform', ['data' => $data]);
				$this->load->view('Footer/resident_footer');
			}
	}

	public function SeniorCitizenView(){
		$header_data['page_name'] = 'SeniorCitizenView';
 			
		$data = $this->user->find($this->user_id);	
		$this->load->view('resident/header', $header_data);
		$this->load->view('resident/nav', 	$data);
		//**** The individual page
		$senior_citizen_data['resident_name']  		=  $this->input->post('resident_name');
		$senior_citizen_data['osca_id_no']  		=  $this->input->post('osca_id_no');
		$senior_citizen_data['home_address'] 		=  $this->input->post('home_address');
		$senior_citizen_data['cellphone_no'] 		=  $this->input->post('cellphone_no');
		$senior_citizen_data['prov_address'] 		=  $this->input->post('prov_address');
		$senior_citizen_data['dateofbirth'] 		=  $this->input->post('dateofbirth');
		$senior_citizen_data['placeofbirth'] 		=  $this->input->post('placeofbirth');
		$senior_citizen_data['sex'] 				=  $this->input->post('sex');
		$senior_citizen_data['citizenship'] 		=  $this->input->post('citizenship');
		$senior_citizen_data['religon'] 			=  $this->input->post('religon');
		$senior_citizen_data['educational_attainment'] 		=  $this->input->post('educational_attainment');
		$senior_citizen_data['skills'] 				=  $this->input->post('skills');
		$senior_citizen_data['spouse_name'] 		=  $this->input->post('spouse_name');
		$senior_citizen_data['monthly_income'] 		=  $this->input->post('monthly_income');

		$senior_citizen_data['family_name'] 		=  $this->input->post('family_name');
		$senior_citizen_data['relationship'] 		=  $this->input->post('relationship');
		$senior_citizen_data['family_age'] 			=  $this->input->post('family_age');
		$senior_citizen_data['family_occupation'] 		=  $this->input->post('family_occupation');
		$senior_citizen_data['monthly_salary'] 		=  $this->input->post('monthly_salary');

		$senior_citizen_data['family_name'] 		=  $this->input->post('family_name');
		$senior_citizen_data['relationship'] 		=  $this->input->post('relationship');
		$senior_citizen_data['family_age'] 			=  $this->input->post('family_age');
		$senior_citizen_data['family_occupation'] 		=  $this->input->post('family_occupation');
		$senior_citizen_data['monthly_salary'] 		=  $this->input->post('monthly_salary');
		
		$this->load->view('resident/seniorcitizenview', $senior_citizen_data);
		//**** END
		$this->load->view('resident/footer');
	}

	public function insert_SeniorCitizen(){

		//**** The individual page
		$senior_citizen_data['senior_citizen_id']  	=  '';
		$senior_citizen_data['resident_id']  		=  $this->session->userdata('logged_in')['user_id'] ;
		$senior_citizen_data['osca_id_no']  		=  $this->input->post('osca_id_no');
		$senior_citizen_data['home_address'] 		=  $this->input->post('home_address');
		$senior_citizen_data['cellphone_no'] 		=  $this->input->post('cellphone_no');
		$senior_citizen_data['prov_address'] 		=  $this->input->post('prov_address');
		$senior_citizen_data['dateofbirth'] 		=  $this->input->post('dateofbirth');
		$senior_citizen_data['placeofbirth'] 		=  $this->input->post('placeofbirth');
		$senior_citizen_data['sex'] 				=  $this->input->post('sex');
		$senior_citizen_data['citizenship'] 		=  $this->input->post('citizenship');
		$senior_citizen_data['religon'] 			=  $this->input->post('religon');
		$senior_citizen_data['educational_attainment'] 		=  $this->input->post('educational_attainment');
		$senior_citizen_data['skills'] 				=  $this->input->post('skills');
		$senior_citizen_data['spouse_name'] 		=  $this->input->post('spouse_name');		
		$senior_citizen_data['monthly_income'] 		=  $this->input->post('monthly_income');
		$senior_citizen_data['family_name'] 		=  $this->input->post('family_name');
		$senior_citizen_data['relationship'] 		=  $this->input->post('relationship');
		$senior_citizen_data['family_age'] 			=  $this->input->post('family_age');
		$senior_citizen_data['family_occupation'] 	=  $this->input->post('family_occupation');
		$senior_citizen_data['monthly_salary'] 		=  $this->input->post('monthly_salary');
		$senior_citizen_data['family_name'] 		=  $this->input->post('family_name');
		$senior_citizen_data['relationship'] 		=  $this->input->post('relationship');
		$senior_citizen_data['family_age'] 			=  $this->input->post('family_age');
		$senior_citizen_data['family_occupation'] 	=  $this->input->post('family_occupation');
		$senior_citizen_data['monthly_salary']		=  $this->input->post('monthly_salary');

		$senior_citizen_id = $this->Resident_model->insert_senior_citizen_data($senior_citizen_data);
		
	}
	
}